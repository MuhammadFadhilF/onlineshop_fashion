CREATE DATABASE onlineshop_fashion;
USE onlineshop_fashion;

CREATE TABLE produk (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100) NOT NULL,
    kategori VARCHAR(50),
    deskripsi TEXT,
    harga DECIMAL(10,2),
    stok INT,
    gender VARCHAR(20),
    ukuran VARCHAR(50),
    warna VARCHAR(50),
    fitur TEXT,
    tanggal_input TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

