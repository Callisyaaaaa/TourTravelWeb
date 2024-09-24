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

<ul>
        <?php foreach ($packages as $package): ?>
            <li>
                <h2><?php echo $package['name']; ?></h2>
                <p><?php echo $package['description']; ?></p>
                <p>Price: Rp<?php echo number_format($package['price'], 2); ?></p>
                <p>Duration: <?php echo $package['duration']; ?></p>
            </li>
        <?php endforeach; ?>
        </ul>