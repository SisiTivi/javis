## Cara menjalankan project

1.  Clone repository

```bash
git clone https://github.com/SisiTivi/javis.git
```

2.  Install dependency

```bash
composer install
npm install
```

3. Buat .env baru berdasarkan .env.example

4. Atur .env sebagai berikut:

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=javis
DB_USERNAME=root
DB_PASSWORD=
```

4. Generate app key dan migrate database

```bash
php artisan key:generate
php artisan migrate
```

5. Jalankan laravel

```bash
php artisan serve
```

## Tech Stack

-   Backend : Laravel 12
-   Frontend : Bootstrap+Blade template
-   Database : MySQL

## Penjelasan Arsitektur

-   Aplikasi ini dibuat dengan menggunakan konsep MVC(Model-View-Controller)
-   Model berfungsi untuk menangani interaksi dengan database
-   View berfungsi untuk menampilkan data kepada pengguna
-   Controller yang berfungsi sebagai jembatan antara Model dan View

## Screenshoot

## Desktop

-   Login
    !(https://drive.google.com/file/d/1dRzqhW6U_VOMM6SfANoTo3JZH_h9hwxZ/view?usp=sharing)

-   Registrasi
    !(https://drive.google.com/file/d/1cSAgUTvKPhuQJrcLDHpjpGAF9mf6Coi7/view?usp=sharing)

-   Dashboard
    !(https://drive.google.com/file/d/1v3TiRAd97HTu8tUnY2tddjDJxNtUL4Iw/view?usp=drive_link)

## Mobile

-   Login
    !(https://drive.google.com/file/d/1x2y0jUbkMIa__03dhPWVI82-l2MMYBgJ/view?usp=drive_link)

-   Registrasi
    !(https://drive.google.com/file/d/12txNtmzLEBFcxOPMD5415V4Jve03INVX/view?usp=drive_link)

-   Dashboard
    !(https://drive.google.com/file/d/1oDHN342gdXzqj7cdjn_GVqw0UYtUGyhA/view?usp=drive_link)
