# ใช้ Apache พร้อม PHP
FROM php:8.2-apache

# เปิดใช้ mod_rewrite
RUN a2enmod rewrite

# คัดลอกไฟล์โปรเจกต์ไปยังโฟลเดอร์เว็บ
COPY . /var/www/html/

# ตั้งสิทธิ์โฟลเดอร์
RUN chown -R www-data:www-data /var/www/html

EXPOSE 80
