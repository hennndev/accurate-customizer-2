# Docker Deployment Guide

Panduan lengkap untuk build, push, dan deploy aplikasi Accurate Customizer menggunakan Docker.

## Prerequisites

- Docker Desktop terinstall di komputer lokal
- Akun Docker Hub (https://hub.docker.com)
- Access ke VPS dengan Docker terinstall
- Git repository untuk source code

## Structure Docker

```
.
├── Dockerfile                          # Multi-stage Dockerfile untuk production
├── docker-compose.yml                  # Untuk development/testing lokal
├── .dockerignore                       # Exclude files dari build context
└── docker/
    ├── nginx/
    │   ├── nginx.conf                  # Nginx main config
    │   └── default.conf                # Laravel site config
    ├── php/
    │   ├── php.ini                     # PHP configuration
    │   └── www.conf                    # PHP-FPM pool config
    └── supervisor/
        └── supervisord.conf            # Supervisor untuk manage processes
```

## Step 1: Persiapan Lokal

### 1.1 Setup Environment Variables

Pastikan file `.env` sudah ada di project:

```bash
cp .env.example .env
```

Edit `.env` untuk production settings:

```env
APP_NAME="Accurate Customizer"
APP_ENV=production
APP_KEY=base64:your-app-key
APP_DEBUG=false
APP_URL=https://yourdomain.com

DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=accurate_customizer
DB_USERNAME=accurate_user
DB_PASSWORD=your-secure-password

REDIS_HOST=redis
REDIS_PASSWORD=null
REDIS_PORT=6379

CACHE_DRIVER=redis
SESSION_DRIVER=redis
QUEUE_CONNECTION=redis
```

### 1.2 Generate Application Key (jika belum)

```bash
php artisan key:generate
```

## Step 2: Build Docker Image

### 2.1 Login ke Docker Hub

```bash
docker login
# Masukkan username dan password Docker Hub Anda
```

### 2.2 Build Image

Ganti `yourusername` dengan username Docker Hub Anda:

```bash
docker build -t yourusername/accurate-customizer:latest .
```

Build dengan tag version specific:

```bash
docker build -t yourusername/accurate-customizer:v1.0.0 .
```

### 2.3 Test Image Secara Lokal (Optional)

Test image yang sudah dibuild:

```bash
docker run -d -p 8000:80 \
  -e APP_KEY="base64:your-app-key" \
  -e DB_HOST="your-db-host" \
  -e DB_DATABASE="your-db-name" \
  -e DB_USERNAME="your-db-user" \
  -e DB_PASSWORD="your-db-password" \
  --name accurate-test \
  yourusername/accurate-customizer:latest
```

Akses di browser: http://localhost:8000

Stop dan remove test container:

```bash
docker stop accurate-test
docker rm accurate-test
```

## Step 3: Push ke Docker Hub

### 3.1 Push Image

```bash
docker push yourusername/accurate-customizer:latest
```

Jika menggunakan version tag:

```bash
docker push yourusername/accurate-customizer:v1.0.0
```

### 3.2 Verifikasi di Docker Hub

- Login ke https://hub.docker.com
- Check repository `yourusername/accurate-customizer`
- Pastikan image sudah terlihat

## Step 4: Deploy ke VPS

### 4.1 Login ke VPS

```bash
ssh user@your-vps-ip
```

### 4.2 Install Docker (jika belum terinstall)

```bash
# Update package list
sudo apt update

# Install Docker
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

# Install Docker Compose
sudo apt install docker-compose -y

# Add user to docker group
sudo usermod -aG docker $USER

# Logout dan login kembali untuk apply group changes
exit
ssh user@your-vps-ip
```

### 4.3 Create Project Directory

```bash
mkdir -p ~/accurate-customizer
cd ~/accurate-customizer
```

### 4.4 Create docker-compose.yml untuk Production

Create file `docker-compose.yml`:

```bash
nano docker-compose.yml
```

Isi dengan configuration berikut (sesuaikan dengan kebutuhan):

```yaml
version: '3.8'

services:
  app:
    image: yourusername/accurate-customizer:latest
    container_name: accurate-customizer-app
    restart: unless-stopped
    ports:
      - "80:80"
      - "443:443"
    environment:
      - APP_NAME=Accurate Customizer
      - APP_ENV=production
      - APP_KEY=${APP_KEY}
      - APP_DEBUG=false
      - APP_URL=https://yourdomain.com
      - DB_CONNECTION=mysql
      - DB_HOST=db
      - DB_PORT=3306
      - DB_DATABASE=${DB_DATABASE}
      - DB_USERNAME=${DB_USERNAME}
      - DB_PASSWORD=${DB_PASSWORD}
      - REDIS_HOST=redis
      - REDIS_PORT=6379
      - CACHE_DRIVER=redis
      - SESSION_DRIVER=redis
      - QUEUE_CONNECTION=redis
    volumes:
      - storage-data:/var/www/html/storage/app
      - logs-data:/var/www/html/storage/logs
    depends_on:
      - db
      - redis
    networks:
      - accurate-network

  db:
    image: mysql:8.0
    container_name: accurate-customizer-db
    restart: unless-stopped
    environment:
      MYSQL_DATABASE: ${DB_DATABASE}
      MYSQL_ROOT_PASSWORD: ${DB_ROOT_PASSWORD}
      MYSQL_PASSWORD: ${DB_PASSWORD}
      MYSQL_USER: ${DB_USERNAME}
    volumes:
      - db-data:/var/lib/mysql
    networks:
      - accurate-network
    command: --default-authentication-plugin=mysql_native_password

  redis:
    image: redis:7-alpine
    container_name: accurate-customizer-redis
    restart: unless-stopped
    volumes:
      - redis-data:/data
    networks:
      - accurate-network
    command: redis-server --appendonly yes

volumes:
  storage-data:
    driver: local
  logs-data:
    driver: local
  db-data:
    driver: local
  redis-data:
    driver: local

networks:
  accurate-network:
    driver: bridge
```

### 4.5 Create .env File

```bash
nano .env
```

Isi dengan environment variables production:

```env
# Application
APP_KEY=base64:your-generated-app-key

# Database
DB_DATABASE=accurate_customizer
DB_USERNAME=accurate_user
DB_PASSWORD=your-secure-password
DB_ROOT_PASSWORD=your-secure-root-password
```

### 4.6 Pull & Start Containers

```bash
# Pull latest image
docker-compose pull

# Start containers in detached mode
docker-compose up -d

# Check running containers
docker-compose ps

# Check logs
docker-compose logs -f app
```

### 4.7 Run Database Migrations

```bash
# Run migrations
docker-compose exec app php artisan migrate --force

# Run seeders (if needed)
docker-compose exec app php artisan db:seed --force
```

### 4.8 Set Proper Permissions

```bash
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chmod -R 775 /var/www/html/storage
```

## Step 5: Maintenance & Updates

### 5.1 Update Application

Ketika ada update baru:

```bash
# Pull latest image
docker-compose pull app

# Recreate app container
docker-compose up -d --force-recreate app

# Run migrations
docker-compose exec app php artisan migrate --force

# Clear caches
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
```

### 5.2 View Logs

```bash
# All services
docker-compose logs -f

# Specific service
docker-compose logs -f app
docker-compose logs -f db

# Last 100 lines
docker-compose logs --tail=100 app
```

### 5.3 Database Backup

```bash
# Backup database
docker-compose exec db mysqldump -u root -p${DB_ROOT_PASSWORD} ${DB_DATABASE} > backup-$(date +%Y%m%d-%H%M%S).sql

# Restore database
docker-compose exec -T db mysql -u root -p${DB_ROOT_PASSWORD} ${DB_DATABASE} < backup-file.sql
```

### 5.4 Stop/Restart Containers

```bash
# Stop all containers
docker-compose stop

# Start containers
docker-compose start

# Restart specific service
docker-compose restart app

# Stop and remove containers
docker-compose down

# Stop and remove including volumes (HATI-HATI!)
docker-compose down -v
```

## Step 6: Setup Nginx Reverse Proxy (Optional)

Jika ingin setup SSL dengan Let's Encrypt menggunakan Nginx sebagai reverse proxy:

### 6.1 Install Nginx di VPS

```bash
sudo apt update
sudo apt install nginx certbot python3-certbot-nginx -y
```

### 6.2 Create Nginx Config

```bash
sudo nano /etc/nginx/sites-available/accurate-customizer
```

```nginx
server {
    listen 80;
    server_name yourdomain.com www.yourdomain.com;

    location / {
        proxy_pass http://localhost:8080;
        proxy_set_header Host $host;
        proxy_set_header X-Real-IP $remote_addr;
        proxy_set_header X-Forwarded-For $proxy_add_x_forwarded_for;
        proxy_set_header X-Forwarded-Proto $scheme;
    }
}
```

```bash
# Enable site
sudo ln -s /etc/nginx/sites-available/accurate-customizer /etc/nginx/sites-enabled/

# Test config
sudo nginx -t

# Reload nginx
sudo systemctl reload nginx
```

### 6.3 Setup SSL dengan Let's Encrypt

```bash
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

Update `docker-compose.yml` port mapping:

```yaml
ports:
  - "8080:80"  # Internal port, accessed via Nginx reverse proxy
```

## Troubleshooting

### Container tidak start

```bash
# Check logs
docker-compose logs app

# Check container status
docker-compose ps

# Inspect container
docker inspect accurate-customizer-app
```

### Permission issues

```bash
docker-compose exec app chown -R www-data:www-data /var/www/html/storage
docker-compose exec app chmod -R 775 /var/www/html/storage
```

### Database connection issues

```bash
# Check if db container is running
docker-compose ps db

# Check db logs
docker-compose logs db

# Test connection from app container
docker-compose exec app php artisan tinker
# Then run: DB::connection()->getPdo();
```

### Clear all caches

```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
```

## Quick Commands Reference

```bash
# Build & Push
docker build -t yourusername/accurate-customizer:latest .
docker push yourusername/accurate-customizer:latest

# Deploy/Update
docker-compose pull
docker-compose up -d --force-recreate

# Migrations
docker-compose exec app php artisan migrate --force

# Logs
docker-compose logs -f app

# Shell access
docker-compose exec app sh
docker-compose exec app php artisan tinker

# Backup DB
docker-compose exec db mysqldump -u root -p${DB_ROOT_PASSWORD} ${DB_DATABASE} > backup.sql

# Restart
docker-compose restart app
```

## Security Checklist

- [ ] Set strong `APP_KEY`
- [ ] Set `APP_DEBUG=false` in production
- [ ] Use strong database passwords
- [ ] Setup firewall (ufw) on VPS
- [ ] Setup SSL/TLS certificates
- [ ] Regular backup database dan storage
- [ ] Keep Docker images updated
- [ ] Monitor logs regularly
- [ ] Setup monitoring (optional: Prometheus, Grafana)

## Notes

- Image menggunakan multi-stage build untuk ukuran yang optimal
- Supervisor menjalankan PHP-FPM, Nginx, queue workers, dan scheduler
- Redis digunakan untuk cache, session, dan queue
- Health check endpoint tersedia di `/health`
- Semua logs di-forward ke stdout/stderr untuk Docker logging

Jika ada pertanyaan atau issues, check logs terlebih dahulu dengan:
```bash
docker-compose logs -f
```
