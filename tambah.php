<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Tambah Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<div class="container mt-5">

<h2>Tambah Buku</h2>

<form action="proses_tambah.php" method="POST">

<div class="mb-3">
<label>Judul</label>
<input type="text" name="judul" class="form-control">
</div>

<div class="mb-3">
<label>Penulis</label>
<input type="text" name="penulis" class="form-control">
</div>

<div class="mb-3">
<label>Penerbit</label>
<input type="text" name="penerbit" class="form-control">
</div>

<div class="mb-3">
<label>Tahun Terbit</label>
<input type="number" name="tahun_terbit" class="form-control">
</div>

<div class="mb-3">
<label>Stok</label>
<input type="number" name="stok" class="form-control">
</div>

<button type="submit" class="btn btn-success">
Simpan
</button>

</form>

</div>

</body>
</html>