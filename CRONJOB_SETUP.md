# Cronjob Setup Guide - Transaction Cleanup

## Overview
Sistem ini dilengkapi dengan automated cleanup untuk menghapus data transaksi lama yang statusnya bukan "success". Cleanup berjalan otomatis setiap hari pada jam 2:00 pagi.

## Fitur Cronjob

### Apa yang Dilakukan?
- **Menghapus transaksi lama** dengan status selain `success`
- **Retention period** dapat dikonfigurasi melalui halaman Configuration (default: 30 hari)
- **Berjalan otomatis** setiap hari jam 02:00 pagi
- **Logging lengkap** untuk monitoring dan debugging

### Database Schema
Table `settings` menyimpan konfigurasi:
```sql
id              : bigint (primary key)
retention_days  : integer (default: 30)
created_at      : timestamp
updated_at      : timestamp
```

## Setup di Server Production

### 1. Setup Laravel Scheduler
Tambahkan entry ini ke crontab server:

```bash
# Edit crontab
crontab -e

# Tambahkan line berikut (sesuaikan path project)
* * * * * cd /path/to/accurate-customizer && php artisan schedule:run >> /dev/null 2>&1
```

**PENTING:** Ganti `/path/to/accurate-customizer` dengan path absolut project Anda.

### 2. Verifikasi Crontab
```bash
# Lihat daftar crontab yang aktif
crontab -l
```

### 3. Setup Permission
Pastikan user yang menjalankan cron memiliki akses ke project:
```bash
# Set ownership (sesuaikan dengan user web server)
sudo chown -R www-data:www-data /path/to/accurate-customizer

# Set permission
chmod -R 755 /path/to/accurate-customizer/storage
chmod -R 755 /path/to/accurate-customizer/bootstrap/cache
```

## Testing

### 1. Test Command Secara Manual
```bash
php artisan transactions:cleanup
```

Output yang diharapkan:
```
Starting transaction cleanup...
Retention period: 30 days
Cutoff date: 2025-11-05 19:55:01
Successfully deleted X old transaction(s).
```

### 2. Test Laravel Scheduler
```bash
# Test scheduler tanpa menunggu waktu schedule
php artisan schedule:run
```

### 3. Lihat Schedule List
```bash
# Lihat semua scheduled tasks
php artisan schedule:list
```

## Konfigurasi Retention Days

### Via Web Interface
1. Login ke aplikasi
2. Buka menu **Configuration**
3. Scroll ke bagian **System Configuration**
4. Ubah nilai **Data Retention Days** (1-365 hari)
5. Klik **Save Configuration**

### Via Database (Optional)
```sql
-- Update retention days menjadi 60 hari
UPDATE settings SET retention_days = 60 WHERE id = 1;
```

## Monitoring & Logs

### 1. Application Logs
Cronjob akan mencatat aktivitas di:
```
storage/logs/laravel.log
```

Log entries yang dicatat:
- `TRANSACTION_CLEANUP_SUCCESS`: Cleanup berhasil
- `TRANSACTION_CLEANUP_ERROR`: Cleanup gagal

### 2. Cek Log Success
```bash
tail -f storage/logs/laravel.log | grep TRANSACTION_CLEANUP
```

### 3. Sample Log Output
```json
{
    "timestamp": "2025-12-06 02:00:01",
    "level": "INFO",
    "message": "TRANSACTION_CLEANUP_SUCCESS",
    "context": {
        "retention_days": 30,
        "cutoff_date": "2025-11-06 02:00:01",
        "deleted_count": 15
    }
}
```

## Troubleshooting

### Cronjob Tidak Berjalan?

1. **Cek crontab sudah benar**
   ```bash
   crontab -l
   ```

2. **Cek permission**
   ```bash
   ls -la /path/to/accurate-customizer/storage
   ```

3. **Cek log cron server**
   ```bash
   # Ubuntu/Debian
   grep CRON /var/log/syslog
   
   # CentOS/RHEL
   grep CRON /var/log/cron
   ```

4. **Test manual**
   ```bash
   cd /path/to/accurate-customizer
   php artisan schedule:run
   ```

### Command Error?

1. **Cek database connection**
   ```bash
   php artisan tinker
   >>> App\Models\Setting::first()
   ```

2. **Cek logs**
   ```bash
   tail -100 storage/logs/laravel.log
   ```

3. **Clear cache**
   ```bash
   php artisan cache:clear
   php artisan config:clear
   ```

## Best Practices

1. **Retention Days**
   - Minimum: 7 hari
   - Recommended: 30-60 hari
   - Maximum: 365 hari

2. **Monitoring**
   - Setup monitoring untuk log errors
   - Review deletion count secara berkala
   - Alert jika deleted_count abnormal tinggi

3. **Backup**
   - Pastikan database backup berjalan sebelum cleanup
   - Recommended: backup sebelum jam 02:00

4. **Testing**
   - Test command manual setelah deployment
   - Monitor log 1-2 hari pertama

## Command Reference

### Manual Commands
```bash
# Run cleanup manual
php artisan transactions:cleanup

# Run scheduler manual
php artisan schedule:run

# Lihat scheduled tasks
php artisan schedule:list

# Test schedule tanpa menjalankan
php artisan schedule:test
```

### Debugging Commands
```bash
# Check Laravel queue
php artisan queue:work --once

# Clear all cache
php artisan optimize:clear

# Check database connection
php artisan migrate:status
```

## Security Notes

- ⚠️ Command ini **PERMANEN menghapus** data transaction
- ✅ Hanya menghapus transaction dengan status **bukan** "success"
- ✅ Transaction dengan status "success" **tidak akan pernah** dihapus
- ✅ Menggunakan soft delete? Tidak - hard delete untuk performance
- ✅ Backup database recommended sebelum cleanup

## Support

Jika ada masalah:
1. Check logs di `storage/logs/laravel.log`
2. Run manual test: `php artisan transactions:cleanup`
3. Check crontab configuration
4. Verify database connection

---
**Last Updated:** December 6, 2025
