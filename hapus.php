<?php

include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi,
"DELETE FROM buku WHERE id='$id'");

if($query){

header("Location: daftar.php");

}else{

echo "Gagal Hapus";

}

?>