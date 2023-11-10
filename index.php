<?php
require 'koneksi.php';
/**
 * koneksi
 * query
 * mengambil data dari tabel siswa
 */
$result = mysqli_query($connect, "SELECT * FROM siswa");

/**
 * mendapat isi tabel (fetch)
 * mysqli_fetch_row mengembalikan data berupa array numerik
 * mysqli_fetch_assoc mengembalikan data berupa array asosiatif
 * mysqli_fetch_array mengembalikan data berupa numerik dan asosiatif
 */

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/style.css" />
</head>
<body>

  <ul>
    <li><a href="index.php">Data Siswa</a></li>
    <li><a href="guru.php">Data Guru</a></li>
  </ul>

  <h1>Data Siswa</h1>

  <a href="siswa_tambah.php" class="btn">Tambah Siswa Baru</a>
  <table>
    <thead>
      <tr>
        <th>No</th>
        <th>ID</th>
        <th>Nama</th>
        <th>Email</th>
        <th>Alamat</th>
      </tr>
    </thead>
    <tbody>
      <?php 
      $nomor = 1;
      while($data = mysqli_fetch_assoc($result)): 
      ?>
      <tr>
        <td><?= $nomor++ ?></td>
        <td><?= $data['id'] ?></td>
        <td><?= $data['nama'] ?></td>
        <td><?= $data['email'] ?></td>
        <td><?= $data['alamat'] ?></td>
      </tr>
      <?php endwhile; ?>
    </tbody>
  </table>
</body>
</html>