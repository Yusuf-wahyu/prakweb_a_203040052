<?php
session_start();

require 'function.php';

$id = $_GET["id"];
$book = query("SELECT * FROM buku WHERE id = $id")[0];

if (isset($_POST["submit"])) {
    if (ubah($_POST) > 0) {
        echo "<script>
                alert('Successfully Update!');
                document.location.href = '../admin.php';
                </script>";
    } else {
        echo "Failed!";
    }
}
?>



<h3>Ubah Data</h3>
<h3>Ubah</h3>

<form action="" method="post">
<input type="hidden" name="id" value="<?= $book['id']; ?>">
    <ul>
        <li>
            <label for="judul_buku">judul buku :</label><br>
            <input type="text" name="judul_buku" id="judul_buku" required value="<?= $book['judul_buku']; ?>"><br><br>
        </li>
        <li>
            <label for="gambar_buku">pengarang :</label><br>
            <input type="text" name="pengarang" id="pengarang" required value="<?= $book['pengarang']; ?>"><br><br>
        </li>
        <li>
            <label for="gambar_buku">gambar :</label><br>
            <input type="text" name="gambar_buku" id="gambar_buku" required value="<?= $book['gambar_buku']; ?>"><br><br>
        </li>
        <button type="submit" name="submit">Update</button>
        <button type="submit">
            <a href="index.php" style="text-decoration: none; color: black;">Back</a>
        </button>
    </ul>
</form>