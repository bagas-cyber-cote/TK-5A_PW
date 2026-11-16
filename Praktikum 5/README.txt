PRAKTIKUM 5 - PEMROGRAMAN WEB
================================

Folder ini berisi latihan pengiriman data menggunakan metode GET dan POST,
serta koneksi PHP ke database MySQL/MariaDB.

DAFTAR FILE
-----------
- biodata-post.php       : Form biodata sederhana menggunakan metode POST.
- cari-get.php           : Form pencarian kata kunci menggunakan metode GET.
- koneksi.php            : Koneksi PHP ke database db_kuliah.
- simpan-pendaftaran.php : Form pendaftaran mahasiswa yang menyimpan data
                           ke tabel mahasiswa.
- daftar-barang.php      : Form tambah barang yang menyimpan data ke tabel
                           barang.
- db-kuliah-M05.sql      : Dump database berisi tabel dan contoh data.
- setup-db_kuliah.sql    : SQL untuk membuat tabel mahasiswa.
- tabel-barang.sql       : SQL untuk menambahkan struktur tabel barang.
- Laporan_Praktikum_5_Bagas_Febrian.pdf : Laporan praktikum.

PERSIAPAN
---------
1. Jalankan Apache dan MySQL melalui XAMPP.
2. Salin atau pastikan folder ini berada di htdocs.
3. Buat database bernama db_kuliah di phpMyAdmin.
4. Pilih database db_kuliah, lalu impor file db-kuliah-M05.sql.
   File dump tersebut sudah memuat tabel mahasiswa dan barang yang digunakan
   oleh halaman PHP.
5. Koneksi pada koneksi.php menggunakan host localhost, user root, tanpa
   password. Sesuaikan koneksi.php jika konfigurasi MySQL berbeda.

MENJALANKAN
-----------
Buka halaman berikut melalui browser:

http://localhost/TK-A/Praktikum%205/biodata-post.php
http://localhost/TK-A/Praktikum%205/cari-get.php
http://localhost/TK-A/Praktikum%205/simpan-pendaftaran.php
http://localhost/TK-A/Praktikum%205/daftar-barang.php

Catatan: biodata-post.php dan cari-get.php merupakan latihan GET/POST tanpa
penyimpanan ke database. Halaman pendaftaran dan tambah barang memerlukan
database db_kuliah beserta tabel yang sesuai.
