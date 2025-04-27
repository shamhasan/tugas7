# Tugas7 - Simple PHP MVC CRUD Application

## Description
This is a simple CRUD application for managing "mahasiswa" data using native PHP with a basic MVC structure.

## Database Setup
Run the following SQL commands to create the database and table:

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

## Running the Application
1. Place the `tugas7` folder in your web server root directory (e.g., `htdocs` for XAMPP).
2. Make sure your MySQL server is running and the database is created as above.
3. Adjust database credentials in `config/database.php` if necessary.
4. Access the application via browser at `http://localhost/tugas7/index.php`.

## Features
- List all mahasiswa
- Add new mahasiswa
- Edit existing mahasiswa
- Delete mahasiswa

## Notes
- This is a simple example using native PHP and mysqli.
- No additional styling or frameworks are used.
