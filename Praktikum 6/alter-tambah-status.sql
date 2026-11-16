-- File: alter-tambah-status.sql
-- Menambahkan kolom status pada tabel pendaftaran.

ALTER TABLE pendaftaran
ADD COLUMN status VARCHAR(20) DEFAULT 'Aktif';
