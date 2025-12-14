# Deploy Docker ke VPS

Panduan deploy aplikasi Accurate Customizer langsung di VPS tanpa Docker Hub.

## Prerequisites

- VPS dengan Docker dan Docker Compose terinstall
- Access SSH ke VPS
- Git terinstall di VPS

## Step 1: Persiapan VPS

### 1.1 Login ke VPS

```bash
ssh user@your-vps-ip
```

### 1.2 Install Docker & Docker Compose (jika belum)

```bash
# Update system
sudo apt update && sudo apt upgrade -y

# Install Docker
curl -fsSL https://get.docker.com -o get-docker.sh
sudo sh get-docker.sh

# Install Docker Compose
sudo apt install docker-compose -y

# Add user to docker group
sudo usermod -aG docker $USER

# Logout dan login kembali
exit
ssh user@your-vps-ip
```

### 1.3 Install Git (jika belum)

```bash
sudo apt install git -y
```

## Step 2: Clone Project ke VPS

### 2.1 Clone Repository

```bash
# Buat direktori untuk aplikasi
cd ~
git clone https://github.com/hennndev/accurate-customizer.git
cd accurate-customizer
```

Atau jika repository private, gunakan Personal Access Token:

```bash
git clone https://YOUR_TOKEN@github.com/hennndev/accurate-customizer.git
```

### 2.2 Setup Environment File

```bash
# Copy .env.example ke .env
cp .env.example .env

# Edit .env untuk production
nano .env
```

Isi dengan konfigurasi production:

```env
APP_NAME="Accurate Customizer"
APP_ENV=production
APP_KEY=base64:your-generated-app-key
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

LOG_CHANNEL=daily
LOG_LEVEL=error
```

## Step 3: Build dan Run Docker

### 3.1 Build Docker Image

```bash
# Build image dari Dockerfile
docker-compose build
```

### 3.2 Start Containers

```bash
# Start semua services
docker-compose up -d

# Check status containers
docker-compose ps

# Check logs
docker-compose logs -f app
```

### 3.3 Setup Application

```bash
# Generate application key (jika belum)
docker-compose exec app php artisan key:generate

# Build frontend assets
docker-compose exec app npm install
docker-compose exec app npm run build

# Run migrations
docker-compose exec app php artisan migrate --force

# Run seeders (optional)
docker-compose exec app php artisan db:seed --force

# Clear & cache config
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache

# Set proper permissions
docker-compose exec app chown -R www-data:www-data storage bootstrap/cache
docker-compose exec app chmod -R 775 storage bootstrap/cache
```

### 3.4 Verify Application

```bash
# Check if app is running
curl http://localhost

# Or access via browser
# http://your-vps-ip
```

## Step 4: Setup Domain & SSL (Optional)

### 4.1 Update docker-compose.yml ports

Edit `docker-compose.yml` untuk expose port yang berbeda:

```yaml
services:
  app:
    ports:
      - "8080:80"  # Change to internal port
```

```bash
# Restart container
docker-compose up -d
```

### 4.2 Install Nginx Reverse Proxy

```bash
# Install Nginx
sudo apt install nginx certbot python3-certbot-nginx -y

# Create Nginx config
sudo nano /etc/nginx/sites-available/accurate-customizer
```

Isi dengan:

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
        proxy_set_header X-Forwarded-Host $host;
        proxy_set_header X-Forwarded-Port $server_port;
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

### 4.3 Setup SSL dengan Let's Encrypt

```bash
sudo certbot --nginx -d yourdomain.com -d www.yourdomain.com
```

## Step 5: Update Application

Ketika ada update di repository:

```bash
# 1. Pull latest code
cd ~/accurate-customizer
git pull origin main

# 2. Rebuild image
docker-compose build

# 3. Restart containers
docker-compose up -d --force-recreate

# 4. Run migrations
docker-compose exec app php artisan migrate --force

# 5. Rebuild assets
docker-compose exec app npm install
docker-compose exec app npm run build

# 6. Clear caches
docker-compose exec app php artisan config:cache
docker-compose exec app php artisan route:cache
docker-compose exec app php artisan view:cache
docker-compose exec app php artisan optimize
```

## Step 6: Maintenance Commands

### View Logs

```bash
# All services
docker-compose logs -f

# Specific service
docker-compose logs -f app
docker-compose logs -f db

# Last 100 lines
docker-compose logs --tail=100 app
```

### Database Backup

```bash
# Backup
docker-compose exec db mysqldump -u root -p${DB_PASSWORD} accurate_customizer > backup-$(date +%Y%m%d-%H%M%S).sql

# Restore
docker-compose exec -T db mysql -u root -p${DB_PASSWORD} accurate_customizer < backup-file.sql
```

### Restart Services

```bash
# Restart all
docker-compose restart

# Restart specific service
docker-compose restart app

# Stop all
docker-compose stop

# Start all
docker-compose start
```

### Access Container Shell

```bash
# App container
docker-compose exec app sh

# Database container
docker-compose exec db bash

# Laravel Tinker
docker-compose exec app php artisan tinker
```

### Clear Caches

```bash
docker-compose exec app php artisan cache:clear
docker-compose exec app php artisan config:clear
docker-compose exec app php artisan route:clear
docker-compose exec app php artisan view:clear
docker-compose exec app php artisan optimize:clear
```

## Step 7: Monitoring

### Check Container Stats

```bash
# Real-time stats
docker stats

# Container processes
docker-compose top
```

### Check Disk Usage

```bash
# Docker disk usage
docker system df

# Detailed view
docker system df -v
```

### Cleanup

```bash
# Remove unused images
docker image prune -a

# Remove unused volumes
docker volume prune

# Remove unused containers
docker container prune

# Complete cleanup (HATI-HATI!)
docker system prune -a --volumes
```

## Step 8: Setup Firewall (UFW)

```bash
# Install UFW
sudo apt install ufw -y

# Allow SSH
sudo ufw allow 22/tcp

# Allow HTTP & HTTPS
sudo ufw allow 80/tcp
sudo ufw allow 443/tcp

# Enable firewall
sudo ufw enable

# Check status
sudo ufw status
```

## Troubleshooting

### Container tidak start

```bash
# Check logs
docker-compose logs app

# Check container status
docker-compose ps

# Rebuild image
docker-compose build --no-cache
docker-compose up -d
```

### Permission errors

```bash
docker-compose exec app chown -R www-data:www-data storage bootstrap/cache
docker-compose exec app chmod -R 775 storage bootstrap/cache
```

### Database connection errors

```bash
# Check if DB is running
docker-compose ps db

# Check DB logs
docker-compose logs db

# Restart DB
docker-compose restart db

# Test connection
docker-compose exec app php artisan tinker
# Run: DB::connection()->getPdo();
```

### Out of memory

```bash
# Check memory usage
free -h

# Restart Docker
sudo systemctl restart docker

# Or restart specific container
docker-compose restart app
```

### Port already in use

```bash
# Check what's using port 80
sudo lsof -i :80

# Kill process if needed
sudo kill -9 PID

# Or change port in docker-compose.yml
```

## Quick Commands Reference

```bash
# Deploy pertama kali
git clone https://github.com/hennndev/accurate-customizer.git
cd accurate-customizer
cp .env.example .env
nano .env  # Edit configuration
docker-compose build
docker-compose up -d
docker-compose exec app php artisan key:generate
docker-compose exec app npm install && npm run build
docker-compose exec app php artisan migrate --force

# Update aplikasi
git pull
docker-compose build
docker-compose up -d --force-recreate
docker-compose exec app php artisan migrate --force
docker-compose exec app npm run build
docker-compose exec app php artisan optimize

# Maintenance
docker-compose logs -f app
docker-compose restart app
docker-compose exec app php artisan cache:clear
docker-compose exec db mysqldump -u root -pPASSWORD database > backup.sql
```

## Security Checklist

- [ ] Set strong `APP_KEY`
- [ ] Set `APP_DEBUG=false` in production
- [ ] Use strong database passwords
- [ ] Setup firewall (UFW)
- [ ] Setup SSL/TLS certificates
- [ ] Regular backup database
- [ ] Keep system & Docker updated
- [ ] Disable root SSH login
- [ ] Use SSH keys instead of passwords
- [ ] Monitor logs regularly
- [ ] Setup fail2ban for brute force protection

## Notes

- Aplikasi berjalan di port 80 (atau custom port yang Anda set)
- Database MySQL berjalan di port 3306
- Redis berjalan di port 6379
- Health check tersedia di `/health`
- Logs tersimpan di `storage/logs` dan dapat diakses via Docker logs
- Queue workers dan scheduler otomatis berjalan via Supervisor

Jika ada masalah, check logs terlebih dahulu:
```bash
docker-compose logs -f
```
