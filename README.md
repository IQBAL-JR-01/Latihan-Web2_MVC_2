# Latihan-Web2_MVC_2 🚀

Repositori ini berisi proyek latihan kedua untuk mata kuliah **Web 2**, berfokus pada implementasi arsitektur perangkat lunak **MVC (Model-View-Controller)** menggunakan PHP Native. 

Proyek ini dibangun dari nol tanpa menggunakan *framework* PHP instan (seperti Laravel atau CodeIgniter). Tujuannya adalah untuk memahami alur kerja fundamental dari konsep MVC, sistem *routing* dasar, serta pemisahan yang rapi antara logika *backend* (pengelolaan data) dan *frontend* (antarmuka pengguna). 

Untuk desain antarmuka, proyek ini diintegrasikan dengan *framework* CSS **Semantic UI**.

## 🛠️ Teknologi yang Digunakan

* **Bahasa Pemrograman:** PHP (Native)
* **Pola Arsitektur:** MVC (Model-View-Controller)
* **Frontend Framework:** Semantic UI
* **Database:** MySQL (menggunakan XAMPP/MariaDB)

## 📁 Struktur Direktori

Proyek ini memisahkan logika internal dan aset yang dapat diakses publik demi keamanan dan kerapian struktur kode:

* `app/` : Berisi sistem dan logika utama aplikasi.
  * `controllers/` : Menangani logika *routing* dan penghubung antara Model dan View.
  * `models/` : Menangani interaksi dan manipulasi data dari database.
  * `views/` : Berisi file antarmuka (HTML/PHP) yang akan ditampilkan ke pengguna.
  * `core/` : Berisi konfigurasi inti aplikasi dan sistem *routing*.
* `public/` : Direktori utama yang dapat diakses melalui *browser*. Berisi *entry point* (`index.php`) dan aset *frontend* pendukung seperti CSS, JavaScript, dan gambar.

## 🚀 Cara Menjalankan Proyek secara Lokal

1. Pastikan Anda telah menginstal *web server* lokal seperti **XAMPP**.
2. *Clone* repositori ini dan letakkan di dalam folder `htdocs` pada instalasi XAMPP Anda:
   ```bash
   git clone https://github.com/IQBAL-JR-01/Latihan-Web2_MVC_2.git
   ```
3. (Opsional) Jika proyek sudah menggunakan database, impor file database SQL (jika tersedia) melalui phpMyAdmin.
4. Sesuaikan konfigurasi koneksi database Anda (username, password, nama db) pada file konfigurasi di dalam folder `app` (biasanya `app/config/config.php` atau `app/core/Database.php`).
5. Buka *browser* Anda dan jalankan aplikasi dengan mengakses URL direktori *public*, contoh: 
   `http://localhost/Latihan-Web2_MVC_2/public/` atau `http://localhost/pelatihan/public/` (sesuaikan dengan nama folder lokal Anda).

## 📄 Lisensi

Proyek ini dibuat untuk tujuan edukasi dan didistribusikan di bawah **MIT License**. Anda bebas untuk menggunakan dan memodifikasi kode ini.
