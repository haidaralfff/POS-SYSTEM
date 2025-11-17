# Laravel POS (Point of Sale)

## 👥 Kelompok 7

1. Muhammad Nuur Fathan (240202840)
2. Haidar Habibi Al Farisi (240202862)
3. Hanifah (240202864)
4. Alvira Libra Ramadhani (240202851)
5. Amelia Putri Azzahra (240202853)

Sistem POS sederhana berbasis **Laravel 11**, dikembangkan berdasarkan analisis RPL meliputi kebutuhan user, alur proses, dan use case. Cocok untuk kasir, owner, dan gudang.

---

## ✨ Fitur Utama

* Login dengan dua role: **Owner** & **Kasir**
* Transaksi penjualan penuh oleh Kasir (input barang → hitung total → pembayaran → struk)
* Update stok otomatis berdasarkan transaksi
* Owner dapat melihat laporan keuangan & laporan stok
* Manajemen barang sederhana (tanpa modul gudang online)

---

## 🎭 Aktor Utama

* **Owner** – Mengecek laporan keuangan & laporan stok
* **Kasir** – Melakukan seluruh proses transaksi & pembayaran

> **Catatan:** Fungsi **Gudang tidak online** (dikelola secara offline), sehingga tidak termasuk dalam sistem.

---

## 🔄 Ringkasan Proses Sistem

### **Login** → Validasi → Akses sesuai role

### **Kasir:** Input barang → Hitung total → Pembayaran → Cetak struk → Update stok

### **Owner:** Melihat laporan keuangan & laporan stok

> **Gudang bersifat offline**, tidak diintegrasikan ke dalam sistem.

---

## 🗃️ Data Utama Sistem

* **User:** ID, username, password, role (Owner/Kasir)
* **Barang:** ID, nama, harga, stok, kategori
* **Transaksi:** ID, kasir, tanggal, total, detail barang

> Modul barang masuk (gudang) tidak disimpan karena prosesnya **offline**.

---

## 🧰 Teknologi

* Laravel 11
* PHP 8.2+
* MySQL/MariaDB
* Composer & Node.js

---

## 🚀 Instalasi Singkat

```
composer install
npm install
cp .env.example .env
php artisan key:generate
php artisan migrate --seed
php artisan serve
npm run dev
```

---

## ▶️ Contoh Penggunaan

* **Owner:** buka laporan
* **Kasir:** proses transaksi, cetak struk
* **Gudang:** input barang masuk, update stok

---

## 🤝 Kontribusi

Fork → buat branch → commit → pull request

---

## 📄 Lisensi

MIT License

---

---

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework. You can also check out [Laravel Learn](https://laravel.com/learn), where you will be guided through building a modern Laravel application.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains thousands of video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the [Laravel Partners program](https://partners.laravel.com).

### Premium Partners

- **[Vehikl](https://vehikl.com)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Curotec](https://www.curotec.com/services/technologies/laravel)**
- **[DevSquad](https://devsquad.com/hire-laravel-developers)**
- **[Redberry](https://redberry.international/laravel-development)**
- **[Active Logic](https://activelogic.com)**

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
