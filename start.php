<?php
session_start(); 

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $_SESSION['visited'] = true; 
    header("Location: index.php"); 
    exit(); 
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Get Started - Libre Travel & Tour</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="get-started-container">
        <h4>DISCOVER THE WORLD AROUND YOU</h4>
        <h1>LIBRE TRAVEL & TOUR</h1>
        <form method="post">
            <button type="submit" class="start-button">Let's Start Your Journey</button>
        </form>

        
    </div>
</body>
</html>
