<?php 

    session_start();

require 'function.php';

if (isset($_POST['tambah'])) {
    if (tambah($_POST) > 0) {
        echo "<script>
                    alert('Data Berhasil ditambahkan!');
                    document.location.href = 'admin.php';
              </script>";
    } else {
        echo    "<script>
                    alert('Data Gagal ditambahkan!');
                    document.location.href = 'admin.php';
                </script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan6a</title>
    <link rel="stylesheet" href="../css/style2.css">    

</head>
<body>
    <h3>Tambah data buku</h3>
    <form class="form" action="" method="post" style="background-color: #97a3a3;">
        <ul>
            <li>
                <label for="judul_buku">Nama buku :</label><br>
                <input type="text" name="judul_buku" id="judul_buku" required><br><br>
            </li>
            <li>
                <label for="penerbit_buku">Penerbit :</label><br>
                <input type="text" name="penerbit_buku" id="penerbit_buku" required><br><br>
            </li>
            <li>
                <label for="pengarang">Pengarang :</label><br>
                <input type="text" name="pengarang" id="pengarang" required><br><br>
            </li>

            <br>
            <li>
                <div class="file-field input-field">
                    <div class="btn">
                        <span>File</span>
                        <input type="file" name="gambar_buku" id="gambar_buku" required><br>
                    </div>
                </div>
            </li>
            <br>
            <br><br><button type="submit" name="tambah">Tambah Data</button>
            <button type="submit">
                <a href="admin.php" style="text-decoration: none; color: black;">Kembali</a>
            </button>
        </ul>
    </form>
</body>
</html>