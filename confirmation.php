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
                <li>Telepon: <?php echo $_SESSION['phone']; ?></li>
                <li>Paket Wisata: <?php echo $selectedPackage['name']; ?></li>
                <li>Jumlah Paket: <?php echo $_SESSION['quantity']; ?></li>
                <li>Nomor Paspor: <?php echo $_SESSION['passport']; ?></li>
                <li>Total Pembayaran: Rp<?php echo number_format($_SESSION['totalPayment'], 2); ?></li>
            </ul>
        </div>

        <a href="index.php">Kembali ke Beranda</a>
    </div>
</body>
</html>
            