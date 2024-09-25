<?php 
$packages = json_decode(file_get_contents('packages.json'), true);

$selectedPackage = null;
if (isset($_GET['id'])) {
    foreach ($packages as $package) {
        if ($package['id'] == $_GET['id']) {
            $selectedPackage = $package;
            break;
        }
    }

    if (!$selectedPackage) {
        die("Paket tidak ditemukan.");
    }
}

?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Booking Paket Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="booking-container">
        <h2>PEMESANAN PAKET TOUR</h2>
        <form action="submit_booking.php" method="post">
            <label for="name">Nama Lengkap:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="phone">Nomor Telepon:</label>
            <input type="number" id="phone" name="phone" required>

            <label for="passport">Nomor Paspor:</label>
            <input type="text" id="passport" name="passport" required>

            <label for="package">Paket Wisata:</label>

            <select id="package" name="package" required>
                <option value="">Pilih Paket Wisata</option>
                <?php
                foreach ($packages as $package): ?>
                    <option value="<?php echo $package['id']; ?>">
                        <?php echo $package['name']; ?>
                    </option>
                <?php endforeach; ?>
            </select>

            <label for="quantity">Jumlah Paket:</label>
            <input type="number" id="quantity" name="quantity" min="1" required>

            <button type="submit">Pesan Paket Tour</button>
        </form>
    </div>
</body>
</html>