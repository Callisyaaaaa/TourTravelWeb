<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $package = $_POST['package'];
    $quantity = $_POST['quantity'];
    $passport = $_POST['passport'];
    $departure = $_POST['departure'];

    
    $jsonData = file_get_contents('packages.json');
    $packages = json_decode($jsonData, true);

    
    $selectedPackage = null;
    foreach ($packages as $pkg) {
        if ($pkg['id'] == $package) {
            $selectedPackage = $pkg;
            break;
        }
    }

    
    if ($selectedPackage) {
        $totalPayment = $quantity * $selectedPackage['price']; 
    }

    
    session_start();
    $_SESSION['name'] = $name;
    $_SESSION['email'] = $email;
    $_SESSION['phone'] = $phone;
    $_SESSION['package'] = $package;
    $_SESSION['quantity'] = $quantity;
    $_SESSION['totalPayment'] = $totalPayment; 
    $_SESSION['passport'] = $passport; 
    $_SESSION['departure'] = $departure; 

    header("Location: confirmation.php");
    exit();
} else {
    echo "<h2>Permintaan tidak valid.</h2>";
}
<<<<<<< Updated upstream
?>
=======
?>
>>>>>>> Stashed changes
