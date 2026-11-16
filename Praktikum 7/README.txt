PRAKTIKUM 7 - PEMROGRAMAN WEB
=============================

Deskripsi
---------
Folder ini berisi latihan perulangan PHP dan aplikasi sederhana untuk
mengelola data mahasiswa menggunakan PHP, MySQL, dan MySQLi.

Fitur
-----
- latihan-loop.php: contoh perulangan for, while, dan do-while.
- daftar-mahasiswa.php: menampilkan daftar dan jumlah mahasiswa.
- tambah-mahasiswa.php: menambahkan data mahasiswa.
- status-mahasiswa.php: mencari mahasiswa berdasarkan NIM.
- ubah-status.php: mengubah status mahasiswa menjadi Aktif, Cuti, atau Lulus.
- hapus.php: menghapus data mahasiswa setelah konfirmasi.

Persiapan dan menjalankan
-------------------------
1. Pastikan XAMPP terpasang dan jalankan Apache serta MySQL.
2. Buka phpMyAdmin di http://localhost/phpmyadmin.
3. Buat database bernama db_kuliah.
4. Pilih database db_kuliah, lalu impor file db-kuliah-07.sql.
   File SQL berisi tabel mahasiswa serta tabel pendukung lainnya.
5. Pastikan konfigurasi koneksi di koneksi.php sesuai dengan pengaturan
   MySQL lokal. Konfigurasi bawaan menggunakan host localhost, pengguna root,
   dan kata sandi kosong.
6. Buka halaman yang diperlukan melalui browser:

   http://localhost/TK-A/Praktikum%207/daftar-mahasiswa.php
   http://localhost/TK-A/Praktikum%207/latihan-loop.php

Berkas pendukung
----------------
- koneksi.php: konfigurasi koneksi ke database db_kuliah.
- db-kuliah-07.sql: skema dan data awal database.
- Gambar ss/: tangkapan layar hasil praktikum.
- Laporan Praktikum 7 - Pemrograman Web.pdf: laporan praktikum.
