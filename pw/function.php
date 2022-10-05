<?php
function koneksi()
{
    return mysqli_connect('localhost', 'root', '', 'prakweb_a_203040052_pw');
}

function query($sql) {
    $conn = koneksi();
    $result = mysqli_query($conn, "$sql");
    $rows = [];
    while ( $row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }
    return $rows;
}

function tambah($data)
{
    $conn = koneksi();

    
    $img = htmlspecialchars($data['gambar_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penerbit= htmlspecialchars($data['penerbit_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);

    $query = "INSERT INTO buku
                    VALUES
                    ('', '$gambar_buku', '$judul_buku', '$penerbit_buku', '$pengarang')";
    
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    $conn = koneksi();
    mysqli_query($conn, "DELETE FROM buku WHERE id = $id");

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    $conn = koneksi();
    $id = $data['id'];
    $gambar_buku = htmlspecialchars($data['gambar_buku']);
    $judul_buku = htmlspecialchars($data['judul_buku']);
    $penerbit_buku = htmlspecialchars($data['penerbit_buku']);
    $pengarang = htmlspecialchars($data['pengarang']);

    $query = "UPDATE buku
            SET
            gambar_buku = '$gambar_buku',
            judul_buku = '$judul_buku',
            penerbit_buku = '$penerbit_buku',
            pengarang = '$pengarang',
            WHERE id = $id
            ";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function cari($keyword) {
    $query = "SELECT * FROM buku
            WHERE
            judul_buku LIKE '%$keyword%' OR
            penerbit_buku LIKE '%$keyword%' OR
            pengarang LIKE '%$keyword%'
            ";
    return query($query);
}