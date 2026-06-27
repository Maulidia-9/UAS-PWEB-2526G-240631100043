<?php

include "koneksi.php";

$id = $_POST['id'];
$judul = $_POST['judul'];
$penulis = $_POST['penulis'];
$penerbit = $_POST['penerbit'];
$tahun = $_POST['tahun_terbit'];
$stok = $_POST['stok'];

$query = mysqli_query($koneksi,

"UPDATE buku SET

judul='$judul',
penulis='$penulis',
penerbit='$penerbit',
tahun_terbit='$tahun',
stok='$stok'

WHERE id='$id'"

);

if($query){

header("Location: daftar.php");

}else{

echo "Gagal Update";

}

?>