<p align="center"><a href="https://api.yoganata.web.id" target="_blank"><img src="https://i.ibb.co.com/NpfWpWj/tensei-shitara-slime-datta-ken-rimuru-render-n-2-by-blackrangers123-ddl7asa.png" width="400" alt="Shiro Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## Tentang Shiro API

Shiro Tales adalah aplikasi web progresif (PWA) yang dirancang untuk memberikan pengalaman membaca yang fleksibel bagi pengguna. Situs web ini mendukung desain responsif, terutama untuk perangkat layar kecil seperti smartphone, karena pengguna utamanya adalah pengguna smartphone dan tablet. Fitur-fiturnya meliputi pendaftaran pengguna, login, dan akses sebagai tamu untuk memudahkan pengguna dalam mengakses novel favorit mereka. Selain itu, terdapat fitur riwayat baca (segera hadir) dan fitur favorit (penanda buku).

Laravel dapat diakses, kuat, dan menyediakan alat yang dibutuhkan untuk aplikasi besar dan tangguh.

## Instalasi Proyek

### Kloning Repository
```bash
git clone https://github.com/Yoganataa/shiroAPI
```

### Pindah ke Folder Proyek
```bash
cd shiroapi
```

### Install Dependensi Composer
```bash
composer install
```

### Install Modul Node
```bash
npm install && npm run build
```

### Buat File Environment
```bash
cp .env.example .env
```

### Generate Application Key
```bash
php artisan key:generate
```

### Konfigurasi Database
Edit file `.env` dengan kredensial database Anda:
```dotenv
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=shirodb
DB_USERNAME=root
DB_PASSWORD=
```

### Jalankan Migrasi
```bash
php artisan migrate
```

### Jalankan Aplikasi
```bash
php artisan serve
```

## Dokumentasi API

### Gambaran Umum

API ini menyediakan endpoint untuk mengelola webtoon, episode, halaman, autentikasi pengguna, profil pengguna, favorit, dan riwayat baca. API ini menggunakan Laravel Sanctum untuk autentikasi.

### Endpoint

#### Autentikasi Pengguna

- **Register**
  - **URL:** `POST /register`
  - **Controller:** `UserController@register`
  - **Deskripsi:** Mendaftarkan pengguna baru.

- **Login**
  - **URL:** `POST /login`
  - **Controller:** `UserController@login`
  - **Deskripsi:** Login pengguna dan mengembalikan token autentikasi.

#### Profil Pengguna

- **Lihat Profil Pengguna**
  - **URL:** `GET /users/profile`
  - **Controller:** `UserController@show`
  - **Deskripsi:** Mengambil profil pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

- **Update Profil Pengguna**
  - **URL:** `PUT /users/update`
  - **Controller:** `UserController@update`
  - **Deskripsi:** Memperbarui profil pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

- **Logout**
  - **URL:** `POST /users/logout`
  - **Controller:** `UserController@logout`
  - **Deskripsi:** Logout pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

#### Webtoon

- **Lihat Semua Webtoon**
  - **URL:** `GET /webtoons`
  - **Controller:** `WebtoonController@index`
  - **Deskripsi:** Mengambil daftar semua webtoon.

- **Lihat Webtoon Berdasarkan ID**
  - **URL:** `GET /webtoons/{webtoon_id}`
  - **Controller:** `WebtoonController@show`
  - **Deskripsi:** Mengambil webtoon spesifik berdasarkan ID.

#### Episode

- **Lihat Semua Episode untuk Webtoon**
  - **URL:** `GET /webtoons/{webtoon_id}/episodes`
  - **Controller:** `EpisodeController@index`
  - **Deskripsi:** Mengambil semua episode untuk webtoon spesifik.

- **Lihat Episode Berdasarkan ID**
  - **URL:** `GET /episodes/{episode_id}`
  - **Controller:** `EpisodeController@show`
  - **Deskripsi:** Mengambil episode spesifik berdasarkan ID.

#### Halaman

- **Lihat Semua Halaman untuk Episode**
  - **URL:** `GET /episodes/{episode_id}/pages`
  - **Controller:** `PageController@index`
  - **Deskripsi:** Mengambil semua halaman untuk episode spesifik.

#### Favorit

- **Favoritkan Webtoon**
  - **URL:** `POST /users/favorites/{webtoon_id}`
  - **Controller:** `UserController@favoriteWebtoon`
  - **Deskripsi:** Menambahkan webtoon ke daftar favorit pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

- **Hapus Favorit Webtoon**
  - **URL:** `DELETE /users/favorites/{webtoon_id}`
  - **Controller:** `UserController@unfavoriteWebtoon`
  - **Deskripsi:** Menghapus webtoon dari daftar favorit pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

#### Riwayat Baca

- **Lihat Riwayat Baca**
  - **URL:** `GET /users/reading-history`
  - **Controller:** `ReadingHistoryController@index`
  - **Deskripsi:** Mengambil riwayat baca pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

- **Tandai Episode sebagai Dibaca**
  - **URL:** `POST /episodes/{episode_id}/mark-read`
  - **Controller:** `ReadingHistoryController@markRead`
  - **Deskripsi:** Menandai episode spesifik sebagai dibaca untuk pengguna yang diautentikasi.
  - **Middleware:** `auth:sanctum`

### Middleware

Rute-rute berikut memerlukan autentikasi melalui Laravel Sanctum:

- `GET /users/profile`
- `PUT /users/update`
- `POST /users/logout`
- `POST /users/favorites/{webtoon_id}`
- `DELETE /users/favorites/{webtoon_id}`
- `GET /users/reading-history`
- `POST /episodes/{episode_id}/mark-read`

Untuk menggunakan rute-rute ini, sertakan header `Authorization: Bearer {token}` dalam permintaan Anda.
