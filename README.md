# Laravel Auth Project

Proyek ini adalah contoh implementasi autentikasi (login dan register) menggunakan Laravel dengan framework Bootstrap CSS. Kata sandi yang digunakan dalam aplikasi ini harus memenuhi beberapa kriteria validasi menggunakan regex.

## Fitur Utama

- **Autentikasi Pengguna**: Pendaftaran dan login pengguna.
- **Validasi Kata Sandi**: Kata sandi harus memiliki:
  - Huruf besar
  - Huruf kecil
  - Angka
  - Karakter spesial

## Prasyarat

Pastikan Anda telah menginstal perangkat lunak berikut:

- [Composer](https://getcomposer.org/)
- [Node.js](https://nodejs.org/)

## Instalasi

1. Clone repositori ini ke mesin lokal Anda
   ```sh
   git clone https://github.com/imamrdn/auth-project.git
2. Masuk direktori
   ```sh
   cd auth-proejct
3. Instal dependensi PHP menggunakan Composer
   ```sh
   composer install
4. Instal dependensi JavaScript menggunakan npm
    ```sh
    npm install
5. Salin file .env.example menjadi .env dan sesuaikan konfigurasi database
    ```sh
    cp .env.example .env
6. Generate kunci aplikasi dan jalankan migrasi database
    ```sh
    php artisan key:generate
    php artisan migrate
7. Anda bisa menggunakan akun yang telah disediakan pada seeder
    ```sh
    php artisan db:seed
8. Jalankan server Laravel
    ```sh
    php artisan serve


