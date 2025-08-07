<?php include 'koneksi.php'; ?>

<a href="tambah.php" class="btn btn-success mb-3">+ Tambah Produk</a>
<td>
  <a href="edit.php?id=<?= $row['id']; ?>" class="btn btn-warning btn-sm">Edit</a>
  <a href="hapus.php?id=<?= $row['id']; ?>" onclick="return confirm('Yakin ingin hapus?')" class="btn btn-danger btn-sm">Hapus</a>
</td>
