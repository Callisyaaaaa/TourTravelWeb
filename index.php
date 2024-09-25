<?php

$jsonData = file_get_contents('packages.json');


if ($jsonData === false) {
    die("Gagal membaca file JSON.");
}


$packages = json_decode($jsonData, true);


if ($packages === null) {
    die("Gagal mendecode data JSON.");
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Paket Wisata</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

</head>
<body>
    <div class="container">
    <h1>
        <span class="header-top"> LIBRE </span><br>
        <span class="header-bottom">Travel & Tour</span>
    </h1>

    <footer>
    <footer>
    <div class="footer-content">
        <p><i class="fas fa-phone"></i>+62 123 456 789</p>
        <p><i class="fas fa-envelope"></i>info@libretravel.com</p>
        <p><i class="fab fa-instagram"></i>@libretouring </p>
    </div>
</footer>