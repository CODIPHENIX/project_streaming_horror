<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
    <link rel="manifest" href="favicon/site.webmanifest">
    <!-- favicon end -->

    <!-- css  -->
    <link rel="stylesheet" href="css/style.css">

    <title>HorreurVision</title>
</head>
<body>
    
    <header>
        <div class="container">
            
            <nav class="flex">
                <a href="index.php" class="active">Accueil</a>
                <a href="nos_film.php">Nos films</a>
                <a href="S’inscrire.php">S’inscrire</a>
                <a href="Se_connecter.php">Se connecter</a>

                <span class="toggle_btn" id="btn_t" aria-hidden="true" >
                    <img src="asset/moon.png" id="btnicon" alt="wtf">
                </span>
            </nav>
        </div>
            
    </header>