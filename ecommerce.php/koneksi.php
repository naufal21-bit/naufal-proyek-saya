<?php
$host = "localhost";
$user = "root";
$pass = ""; // default kosong kalau kamu pakai XAMPP/Laragon
$db   = "ecommerce";

// Membuat koneksi
$conn = mysqli_connect($host, $user, $pass, $db);

// Mengecek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>
