<?php

session_start();

if(!isset($_SESSION['login'])){
    header("Location: login.php");
}

?>

<!DOCTYPE html>
<html>
<head>

<title>Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>

<nav class="navbar navbar-dark bg-primary">

<div class="container">

<span class="navbar-brand">
📚 Sistem Pendataan Buku
</span>

<a href="logout.php" class="btn btn-light">
Logout
</a>

</div>

</nav>

<div class="container mt-5">

<a href="tambah.php" class="btn btn-success">
Tambah Buku
</a>

<a href="daftar.php" class="btn btn-primary">
Daftar Buku
</a>

</div>

</body>
</html>