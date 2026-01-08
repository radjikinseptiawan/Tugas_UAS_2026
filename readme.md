# Company Profile CMS

**Company Profile CMS** adalah aplikasi **Content Management System (CMS)** sederhana berbasis **PHP & MySQL** yang digunakan untuk mengelola konten website company profile secara dinamis.

Project ini cocok untuk website perusahaan skala kecil–menengah yang membutuhkan pengelolaan konten tanpa harus mengubah kode secara langsung.

---

## ✨ Fitur Utama

* Halaman company profile (Home)
* Sistem login (admin)
* Update konten melalui CMS
* Struktur MVC sederhana
* Middleware untuk validasi akses
* Layout terpisah (Header, Footer, Navigation)
* Konfigurasi database terpusat

---

## 🛠️ Teknologi yang Digunakan

* **PHP** (Native)
* **MySQL**
* **HTML / CSS**
* **Apache (.htaccess)**

---

## 📂 Struktur Folder

```bash
companyProfileCMS/
│
├── component/          # Komponen tambahan (error handling, dll)
│   └── error.php
│
├── config/             # Konfigurasi aplikasi
│   ├── db.php          # Konfigurasi database
│   └── kernel.php      # Core aplikasi
│
├── layouts/            # Layout UI
│   ├── header.php
│   ├── footer.php
│   └── navigation.php
│
├── middleware/         # Middleware (auth, validasi, dll)
│
├── pages/              # Halaman aplikasi
│   ├── home.php
│   ├── login.php
│   └── process_update.php
│
├── default.sql         # Struktur database
├── index.php           # Entry point aplikasi
├── .htaccess
└── README.md
```

---

## 🚀 Cara Instalasi

1. **Clone repository**

   ```bash
   git clone https://github.com/username/companyProfileCMS.git
   ```

2. **Pindahkan ke folder server**

   * XAMPP: `htdocs/`
   * Laragon: `www/`

3. **Import database**

   * Buat database baru di MySQL
   * Import file `default.sql`

4. **Konfigurasi database**
   Edit file:

   ```bash
   config/db.php
   ```

   Sesuaikan dengan konfigurasi MySQL kamu.

5. **Jalankan aplikasi**

   ```bash
   http://localhost/companyProfileCMS
   ```

---

## 🔐 Login Admin

Gunakan akun admin yang tersedia di database (`default.sql`) atau sesuaikan sendiri melalui tabel user/admin.

---

## 📌 Catatan

* Project ini menggunakan **PHP native**, tanpa framework.
* Cocok sebagai:

  * Project pembelajaran
  * CMS internal
  * Website company profile sederhana
* Keamanan masih dasar, disarankan untuk pengembangan lebih lanjut jika digunakan di production.

