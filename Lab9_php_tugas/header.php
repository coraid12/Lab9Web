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
    <title>Tugas</title>
    <link href="styles.css" rel="stylesheet" type="text/css" />
</head>
<body>
    <div id="container">
        <header>
            <h1>PERTANYAAN DAN TUGAS</h1>
        </header>
        <nav>
            <a href="home.php">Home</a>
            <a href="about.php">About Us</a>
        </nav>