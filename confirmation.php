<?php
session_start();

$jsonData = file_get_contents('packages.json');
$packages = json_decode($jsonData, true);

$selectedPackage = null;
foreach ($packages as $package) {
    if ($package['id'] == $_SESSION['package']) {
        $selectedPackage = $package;
        break;
    }
}

if ($selectedPackage === null) {
    die("Paket tidak ditemukan.");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konfirmasi Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="confirmation-container">
        <h2>Terima kasih, <?php echo $_SESSION['name']; ?>!</h2>
        <p>Pemesanan Anda telah diterima.</p>
        
        <div class="data-container">
            <strong>Detail Pemesanan:</strong>
            <ul>
                <li>Nama: <?php echo $_SESSION['name']; ?></li>
                <li>Email: <?php echo $_SESSION['email']; ?></li>
            </ul>
        </div>