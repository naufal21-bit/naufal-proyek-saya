-- Buat database dan pilih
CREATE DATABASE IF NOT EXISTS ecommerce;
USE ecommerce;

-- Tabel Produk
CREATE TABLE IF NOT EXISTS products (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama_produk VARCHAR(100),
  harga INT,
  deskripsi TEXT,
  stok INT
);

-- Tabel Users
CREATE TABLE IF NOT EXISTS users (
  id INT AUTO_INCREMENT PRIMARY KEY,
  nama VARCHAR(100),
  email VARCHAR(100),
  password VARCHAR(100)
);

-- Tabel Orders
CREATE TABLE IF NOT EXISTS orders (
  order_id INT AUTO_INCREMENT PRIMARY KEY,
  user_id INT,
  product_id INT,
  quantity INT,
  total INT,
  FOREIGN KEY (user_id) REFERENCES users(id),
  FOREIGN KEY (product_id) REFERENCES products(id)
);

-- Tambah Produk (CREATE)
INSERT INTO products (nama_produk, harga, deskripsi, stok)
VALUES 
('Laptop ASUS', 8500000, 'Laptop untuk pelajar', 10),
('Smartphone Xiaomi', 3000000, 'HP gaming entry level', 15);

-- Lihat semua produk (READ)
SELECT * FROM products;

-- Update produk (UPDATE)
UPDATE products
SET harga = 8700000, stok = 8
WHERE id = 1;

-- Hapus produk (DELETE)
DELETE FROM products
WHERE id = 2;
