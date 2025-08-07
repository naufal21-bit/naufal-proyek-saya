<?php include 'koneksi.php'; ?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Tambah Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
  <h2>Tambah Produk</h2>
  <form action="" method="POST">
    <input type="text" name="nama_produk" class="form-control mb-2" placeholder="Nama Produk" required>
    <input type="number" name="harga" class="form-control mb-2" placeholder="Harga" required>
    <textarea name="deskripsi" class="form-control mb-2" placeholder="Deskripsi"></textarea>
    <input type="number" name="stok" class="form-control mb-2" placeholder="Stok" required>
    <button class="btn btn-primary" name="submit">Simpan</button>
  </form>

  <?php
  if (isset($_POST['submit'])) {
    $nama = $_POST['nama_produk'];
    $harga = $_POST['harga'];
    $deskripsi = $_POST['deskripsi'];
    $stok = $_POST['stok'];

    $insert = mysqli_query($conn, "INSERT INTO products (nama_produk, harga, deskripsi, stok) VALUES ('$nama', '$harga', '$deskripsi', '$stok')");
    if ($insert) {
      echo "<div class='alert alert-success mt-3'>Berhasil disimpan!</div>";
    } else {
      echo "<div class='alert alert-danger mt-3'>Gagal menyimpan!</div>";
    }
  }
  ?>
</div>
</body>
</html>
