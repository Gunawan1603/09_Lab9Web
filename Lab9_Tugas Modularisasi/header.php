<?php
include("koneksi.php");

// query untuk menampilkan data
$sql = 'SELECT * FROM data_barang';
$result = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Tugas Modularisasi</title>
   <link href="style.css" rel="stylesheet" type="text/css"/>
</head>
<body>
    <div class="container">
         <header>
             <center><h1>TOKO GUNA JAYA ELEKTRONIK</h1></center>
         </header>
         <nav>
            <a href="home.php">Home</a>
            <a href="about.php">Tentang</a>
            <a href="tambah.php">Tambah Barang</a>
         </nav>