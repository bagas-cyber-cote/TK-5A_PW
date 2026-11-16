PRAKTIKUM 6 - PEMROGRAMAN WEB
=============================

Folder ini berisi latihan PHP tentang percabangan dan pengelolaan data mahasiswa.

DAFTAR PROGRAM
--------------
- cek-kelulusan.php
  Memeriksa kelulusan berdasarkan nilai minimal 70 dan kehadiran minimal 75.
  Hasilnya adalah Lulus, Remedial, atau Tidak Lulus.

- nilai-huruf.php
  Mengubah nilai angka menjadi predikat:
  A (85-100), B (70-84), C (55-69), D (40-54), dan E (di bawah 40).

- pilih-menu.php
  Menggunakan switch untuk menampilkan paket Regular (1), Premium (2),
  atau Pelajar (3).

- status-mahasiswa.php
  Mencari data mahasiswa berdasarkan NIM dan menampilkan nama, NIM,
  program studi, serta status.

- ubah-status.php
  Mengubah status mahasiswa menjadi Aktif, Cuti, atau Lulus.

PERSIAPAN DATABASE
------------------
1. Jalankan Apache dan MySQL melalui XAMPP.
2. Buat atau impor database db_kuliah menggunakan file db-kuliah-m06.sql
   melalui phpMyAdmin.
3. Pastikan tabel mahasiswa tersedia dan memiliki kolom status.
4. Pengaturan koneksi pada koneksi.php menggunakan host localhost,
   pengguna root, kata sandi kosong, dan database db_kuliah.
   Sesuaikan pengaturan tersebut jika konfigurasi lokal berbeda.

MENJALANKAN
-----------
Simpan folder ini di dalam document root server web (misalnya htdocs),
kemudian buka halaman PHP melalui browser menggunakan alamat localhost
yang mengarah ke folder Praktikum 6.

File gambar hasil tampilan berada di folder "Gambar ss".
