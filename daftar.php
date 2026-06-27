<?php

session_start();

if(!isset($_SESSION['login'])){
header("Location: login.php");
}

include "koneksi.php";
include "fungsi.php";

$data = mysqli_query($koneksi,"SELECT * FROM buku");

?>

<!DOCTYPE html>

<html>
<head>

<title>Daftar Buku</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body>

<nav class="navbar navbar-dark bg-primary">

<div class="container">

<a href="home.php" class="navbar-brand">
📚 Sistem Pendataan Buku
</a>

<a href="logout.php" class="btn btn-light">
Logout
</a>

</div>

</nav>

<div class="container mt-4">

<h2>Daftar Buku</h2>

<a href="tambah.php" class="btn btn-success mb-3">
+ Tambah Buku
</a>

<table class="table table-bordered table-striped table-hover">

<tr>

<th>ID</th>
<th>Judul</th>
<th>Penulis</th>
<th>Penerbit</th>
<th>Tahun</th>
<th>Stok</th>
<th>Status</th>
<th>Aksi</th>

</tr>

<?php while($row = mysqli_fetch_assoc($data)){ ?>

<tr>

<td><?= $row['id']; ?></td>

<td><?= formatJudul($row['judul']); ?></td>

<td><?= $row['penulis']; ?></td>

<td><?= $row['penerbit']; ?></td>

<td><?= $row['tahun_terbit']; ?></td>

<td><?= $row['stok']; ?></td>

<td><?= statusStok($row['stok']); ?></td>

<td>

<a href="edit.php?id=<?= $row['id']; ?>"
class="btn btn-warning btn-sm">

Edit

</a>

<a href="#"
class="btn btn-danger btn-sm"
onclick="hapusData(<?= $row['id']; ?>)">

Hapus

</a>
</td>

</tr>

<?php } ?>

</table>

</div>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>

function hapusData(id){

Swal.fire({

title: 'Yakin ingin menghapus?',

text: 'Data yang dihapus tidak dapat dikembalikan',

icon: 'warning',

showCancelButton: true,

confirmButtonColor: '#dc3545',

cancelButtonColor: '#6c757d',

confirmButtonText: 'Ya, Hapus',

cancelButtonText: 'Batal'

}).then((result) => {

if(result.isConfirmed){

window.location =
'hapus.php?id=' + id;

}

})

}

</script>

</body>
</html>
