<?php
// koneksi ke database
$conn = mysqli_connect("localhost", "root", "", "prakweb_a_203040052_pw");

// ambil dari tabel buku query
$result = mysqli_query($conn, "SELECT * FROM buku");

// ubah data ke dalam array
// $row = mysqli_fetch_row($result); // array numerik
// $row = mysqli_fetch_assoc($result); // array associative
// $row = mysqli_fetch_array($result); // keduanya
$rows = [];
while ($row = mysqli_fetch_assoc($result)) {
  $rows[] = $row;
}
// tampung ke variabel buku
$bk = $rows;
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Buku</title>
</head>

<body>

  <h1>Daftar Buku</h1>

  <table border="1" cellpading="10" cellspacing="0">
    <tr>
      <th>nomor</th>
      <th>Judul</th>
      <th>penerbit</th>
      <th>tanggal</th>
      <th>warna</th>
      <th>halaman</th>
      <th>pengarang</th>
      <th>gambar</th>
      
    </tr>
    <?php $i = 1; ?>
    <?php foreach ($bk as $rows) : ?>
      <tr>
        <td><?= $rows["id"]; ?></td>
        <td><?= $rows["judul_buku"]; ?></td>
        <td><?= $rows["penerbit_buku"]; ?></td>
        <td><?= $rows["tanggal_terbit"]; ?></td>
        <td><?= $rows["warna_buku"]; ?></td>
        <td><?= $rows["jumlah_halaman"]; ?></td>
        <td><?= $rows["pengarang"]; ?></td>
        <td>
          <figure class="image is-120x120">
            <img src="asset/<?= $rows["gambar_buku"]; ?>" width="100" alt="">
          </figure>
        </td>
      <?php endforeach; ?>

</html>