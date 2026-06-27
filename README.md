# 📚 Sistem Pendataan Buku Berbasis Web

## Ujian Akhir Semester (UAS) Pemrograman Web

**Universitas Trunojoyo Madura**
Tahun Akademik **2025/2026 Genap**

---

# 👨‍🎓 Identitas Mahasiswa

| Keterangan        | Data                         |
| ----------------- | ---------------------------- |
| **Nama**          | Maulidia                     |
| **NIM**           | 240631100043                 |
| **Mata Kuliah**   | Pemrograman Web              |
| **Program Studi** | Pendidikan Informatika       |
| **Universitas**   | Universitas Trunodjoyo Madura|

---

# 📖 Judul Aplikasi

## Sistem Pendataan Buku Berbasis Web Menggunakan PHP Native dan MySQL

---

# 📝 Deskripsi Aplikasi

Sistem Pendataan Buku merupakan aplikasi berbasis web yang dibuat menggunakan PHP Native dan MySQL. Aplikasi ini digunakan untuk membantu pengguna dalam mengelola data buku secara sederhana.

Fitur utama aplikasi meliputi:

* Login Admin
* Dashboard
* Tambah Data Buku
* Menampilkan Daftar Buku
* Edit Data Buku
* Hapus Data Buku
* Logout
* Konfirmasi menggunakan SweetAlert

Aplikasi ini dikembangkan sebagai proyek Ujian Akhir Semester (UAS) mata kuliah Pemrograman Web.

---

# ✨ Fitur Aplikasi

✅ Login Admin

✅ Dashboard

✅ Tambah Data Buku

✅ Menampilkan Daftar Buku

✅ Edit Data Buku

✅ Hapus Data Buku

✅ Status Stok Buku

✅ Logout

✅ Bootstrap 5

✅ SweetAlert2

---

# 🛠 Teknologi yang Digunakan

* PHP Native
* HTML5
* CSS3
* Bootstrap 5
* JavaScript
* SweetAlert2
* MySQL
* XAMPP
* Visual Studio Code

---

# 📷 Screenshot Aplikasi

## Halaman Login

![Login](assets/login.png)

## Dashboard

![Dashboard](assets/dashboard.png)

## Tambah Buku

![Tambah Buku](assets/tambah-buku.png)

## Daftar Buku

![Daftar Buku](assets/daftar-buku.png)

## Edit Buku

![Edit Buku](assets/edit-buku.png)
---

# 🗄 Struktur Database

## Nama Database

db_buku

### Struktur Tabel buku

| Field        | Tipe Data    | Keterangan                 |
| ------------ | ------------ | -------------------------- |
| id           | INT          | Primary Key Auto Increment |
| judul        | VARCHAR(100) | Judul Buku                 |
| penulis      | VARCHAR(100) | Nama Penulis               |
| penerbit     | VARCHAR(100) | Nama Penerbit              |
| tahun_terbit | INT          | Tahun Terbit               |
| stok         | INT          | Jumlah Stok Buku           |

---

## SQL Database

```sql
CREATE DATABASE db_buku;

USE db_buku;

CREATE TABLE buku(
id INT AUTO_INCREMENT PRIMARY KEY,
judul VARCHAR(100),
penulis VARCHAR(100),
penerbit VARCHAR(100),
tahun_terbit INT,
stok INT
);
```

---

# 📂 Struktur Folder Project

```text
SISTEM_BUKU
│
├── login.php
├── cek_login.php
├── logout.php
├── home.php
├── koneksi.php
├── fungsi.php
├── tambah.php
├── proses_tambah.php
├── daftar.php
├── edit.php
├── proses_edit.php
├── hapus.php
├── style.css
├── README.md
└── assets
    ├── login.png
    ├── dashboard.png
    ├── tambah-buku.png
    ├── daftar-buku.png
    └── edit-buku.png
```

---

# 🔑 Login Admin

Username

```
admin
```

Password

```
12345
```

---

# ▶ Cara Menjalankan Aplikasi

1. Install XAMPP.
2. Jalankan Apache dan MySQL.
3. Buka phpMyAdmin.
4. Buat database dengan nama **db_buku**.
5. Jalankan script SQL di atas.
6. Salin folder **sistem_buku** ke folder:

```
C:\xampp\htdocs\
```

7. Jalankan browser.

8. Buka alamat:

```
http://localhost/sistem_buku/login.php
```

9. Login menggunakan akun admin.

---

# 🎯 Implementasi Materi Pemrograman Web

Project ini mengimplementasikan:

* HTML
* CSS
* Bootstrap
* PHP Native
* MySQL
* Session
* CRUD
* Include
* Function
* Percabangan
* Perulangan
* GET
* POST
* SweetAlert

---

# 📌 Kesimpulan

Aplikasi Sistem Pendataan Buku berhasil dikembangkan menggunakan PHP Native dan MySQL. Aplikasi ini mampu melakukan pengelolaan data buku secara lengkap (CRUD), dilengkapi sistem login, dashboard, antarmuka Bootstrap yang responsif, serta konfirmasi menggunakan SweetAlert sehingga lebih mudah digunakan dan memiliki tampilan yang modern.

---

# 👤 Author

**Maulidia **

Program Studi Pendidikan Informatika

Universitas Trunodjoyo Madura

© 2026
