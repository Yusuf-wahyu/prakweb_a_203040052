<?php
require 'function.php';

$buku = query("SELECT * FROM buku");


 if( isset($_POST["cari"]) ) {
  $buku = cari($_POST["keyword"]);
}

?>
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Buku mahasiswa ganteng</title>
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
        <link rel="stylesheet" href="css/style.css">
</head>

<body style="background-color: lightgrey">
    <!--Navbar-->
    <div class="navbar-fixed">
      <nav class="teal lighten-2">
            <div class="container">
            <div class="nav-wrapper">
                <a href="#!" class="brand-logo left">Buku mahasiswa ganteng</a>
                <a href="#" data-target="mobile-nav" class="sidenav-trigger"><i class="material-icons">menu</i></a>
                <ul class="right">
                </ul>
            </div>
        </div>
        </nav>
    </div>

    <div class="search">
        <div class="container">
            <form action="" method="POST">
                <input type="text" name="keyword" placeholder="Search" autocomplete="off" autofocus id="keyword">
                <input type="submit" name="cari" id="tombol-cari"></button>
            </form>
        </div>
    </div>

    <div class="container">
    <h3>Buku mahasiswa ganteng</h3>
    <div id="container">
    <table class="table center">
    <thead>
        <tr>
            <th scope="col">No</th>
            <th scope="col">judul buku</th>
            <th scope="col">gambar</th>
            <th scope="col">penerbit</th>
            <th scope="col">pengarang</th>
            <th scope="col">Menu</th>
        </tr>
    </thead>
    <tbody>
        <?php $i = 1?>
        <?php foreach($buku as $book) : ?>
                <tr>
                    <th scope="row"><?=$i?></th>
                    <td><?= $book["judul_buku"]?> </td>
                    <td><img width="100px" src="asset/<?= $book["gambar_buku"] ?>" alt="gambar_buku"></td>
                    <td><?= $book["penerbit_buku"]?> </td>
                    <td><?= $book["pengarang"]?> </td>


                    <td>
                    <a href="update.php?id=<?= $book['id']; ?>">ubah</a> |
                    <a href="create.php">tambah</a> |
                    <a href="delete.php?id=<?= $book['id']; ?>" onclick="return confirm('Are You Sure?');">hapus</a>
                    </td>
                </tr>
        <?php
            $i++;
        endforeach;
        ?>
    </tbody>
    </table>
    </div>
    </div>

</body>
</html>