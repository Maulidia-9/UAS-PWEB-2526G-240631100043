<?php

session_start();

if(!isset($_SESSION['login'])){
header("Location: login.php");
}

include "koneksi.php";

$id = $_GET['id'];

$data = mysqli_query($koneksi,
"SELECT * FROM buku WHERE id='$id'");

$row = mysqli_fetch_assoc($data);

?>

<!DOCTYPE html>

<html>
<head>

<title>Edit Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<div class="container mt-5">

<div class="card shadow">

<div class="card-header bg-warning">

<h3>Edit Data Buku</h3>

</div>

<div class="card-body">

<form action="proses_edit.php" method="POST">

<input type="hidden"
name="id"
value="<?= $row['id']; ?>">

<div class="mb-3">

<label>Judul Buku</label>

<input type="text"
name="judul"
value="<?= $row['judul']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Penulis</label>

<input type="text"
name="penulis"
value="<?= $row['penulis']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Penerbit</label>

<input type="text"
name="penerbit"
value="<?= $row['penerbit']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Tahun Terbit</label>

<input type="number"
name="tahun_terbit"
value="<?= $row['tahun_terbit']; ?>"
class="form-control">

</div>

<div class="mb-3">

<label>Stok</label>

<input type="number"
name="stok"
value="<?= $row['stok']; ?>"
class="form-control">

</div>

<button
type="button"
class="btn btn-warning"
onclick="konfirmasiUpdate()">

Update Data

</button>

<a href="daftar.php"
class="btn btn-secondary">

Kembali

</a>

</form>

</div>

</div>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

function konfirmasiUpdate(){

Swal.fire({

title:'Simpan Perubahan?',

text:'Data buku akan diperbarui',

icon:'question',

showCancelButton:true,

confirmButtonColor:'#198754',

cancelButtonColor:'#6c757d',

confirmButtonText:'Ya, Simpan',

cancelButtonText:'Batal'

}).then((result)=>{

if(result.isConfirmed){

document.forms[0].submit();

}

})

}

</script>

</body>
</html>
