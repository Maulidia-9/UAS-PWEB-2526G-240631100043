<?php

include "koneksi.php";

$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$query = mysqli_query($koneksi,"
INSERT INTO buku
(judul, penulis, penerbit, tahun_terbit, stok)
VALUES
('$judul','$penulis','$penerbit','$tahun','$stok')
");

if($query){

    header("Location: daftar.php");

}else{

    echo mysqli_error($koneksi);

}

?>