# Tugas 7 - Aplikasi CRUD Mahasiswa dengan PHP MVC

## Deskripsi
Aplikasi CRUD sederhana ini digunakan untuk mengelola data "mahasiswa" dengan menggunakan PHP native dan struktur MVC dasar. Aplikasi ini memungkinkan pengguna untuk menampilkan, menambah, mengedit, dan menghapus data mahasiswa.

## Setup Database
Langkah pertama adalah membuat database dan tabel yang digunakan oleh aplikasi. Jalankan perintah SQL berikut di MySQL:

```sql
CREATE SCHEMA dbmahasiswa1;
USE dbmahasiswa1;

CREATE TABLE mahasiswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(100),
    nim VARCHAR(15)
);

INSERT INTO mahasiswa (nama, nim) VALUES
('isham', '2351900111038');
```

## Menjalankan Aplikasi
1. Tempatkan folder `tugas7` di direktori root server web Anda (misalnya, `htdocs` untuk XAMPP).
2. Pastikan server MySQL sudah berjalan dan database telah dibuat sesuai dengan instruksi di atas.
3. Sesuaikan konfigurasi koneksi database pada file `config/database.php` jika diperlukan.
4. Akses aplikasi melalui browser dengan membuka alamat `http://localhost/tugas7/index.php`.

## Fitur
- Menampilkan seluruh data mahasiswa
- Menambahkan data mahasiswa baru
- Mengedit data mahasiswa
- Menghapus data mahasiswa

## Catatan
- Aplikasi ini dibangun menggunakan PHP native dan ekstensi `mysqli` untuk koneksi ke database.
- Tidak menggunakan framework atau styling tambahan; tampilan masih sederhana.
