<?php include 'koneksi.php';

// Ambil data berdasarkan ID
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE id = $id");
$row = mysqli_fetch_assoc($result);

// Proses update
if (isset($_POST['submit'])) {
  $nama = $_POST['nama_produk'];
  $harga = $_POST['harga'];
  $deskripsi = $_POST['deskripsi'];
  $stok = $_POST['stok'];

  $update = mysqli_query($conn, "UPDATE products SET 
    nama_produk='$nama',
    harga='$harga',
    deskripsi='$deskripsi',
    stok='$stok'
    WHERE id=$id");

  if ($update) {
    echo "<script>alert('Data berhasil diupdate'); window.location='tampil.php';</script>";
  } else {
    echo "<div class='alert alert-danger'>Gagal update!</div>";
  }
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
  <title>Edit Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light p-4">
<div class="container">
  <h2>Edit Produk</h2>
  <form method="POST">
    <input type="text" name="nama_produk" class="form-control mb-2" value="<?= $row['nama_produk']; ?>" required>
    <input type="number" name="harga" class="form-control mb-2" value="<?= $row['harga']; ?>" required>
    <textarea name="deskripsi" class="form-control mb-2"><?= $row['deskripsi']; ?></textarea>
    <input type="number" name="stok" class="form-control mb-2" value="<?= $row['stok']; ?>" required>
    <button class="btn btn-primary" name="submit">Update</button>
  </form>
</div>
</body>
</html>
