<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Shiro API

Shiro Tales adalah sebuah  Web Progresif (PWA) yang dibuat untuk memberikan pengalaman membaca yang fleksibel untuk para pengguna. Website mendukung responsifitas yang cukup bagus apalagi untuk perangkat yang miliki layar kecil seperti smartphone karena memang target penggunanya adalah pengguna smartphone dan tablet. Memiliki fitur masuk juga pendaftaran dan masuk sebagai tamu untuk memudahkan pada pembaca dalam mengakses novel kesukaan mereka dan tak lupa terdapat hitory baca(segera) juga terdapata fitur favorit atau bisa disebut juga bookmark.


Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Install Project
clone
```
git clone https://github.com/Yoganataa/shiroAPI
```
Pindah ke folder
```
cd shiroapi
```

Install Composer
```
composer install
```
Install node modules
```
npm install && npm run build
```
Buat environment
```
cp .env.example .env
```
Buat app key
```
php artisan key:generate
```
Setup database 
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shirodb
DB_USERNAME=root
DB_PASSWORD=
```
Migrasi data
```
php artisan migrate
```
Jalankan laravel
```
php artisan serve
```