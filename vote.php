<?php
    session_start();

    include "db.php";
    include "functions.php";

    $user_data = check_login($con);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="styles.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Roboto&display=swap" rel="stylesheet">
        <title>Vota por tu capitán</title>
    </head>
    <body>
        <div class="header">
            <h1>Elección de capitanes 2021<br>
            SEUPB</h1>
        </div>
        <div class="container">
            <div class="card">
                <div class="imgBx">
                    <img src="images/image1.jpg">
                </div>
                <div class="content">
                    <h2>Card one</h2>
                    <p>Al obstinado escalador le tomó años de intentos y fracasos llegar a la cima para descubrir, tristemente, que allí tampoco está la felicidad.</p>
                    <a href="vote.php">Votar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/image2.jpg">
                </div>
                <div class="content">
                    <h2>Card two</h2>
                    <p>Al obstinado escalador le tomó años de intentos y fracasos llegar a la cima para descubrir, tristemente, que allí tampoco está la felicidad.</p>
                    <a href="vote.php">Votar</a>
                </div>
            </div>
            <div class="card">
                <div class="imgBx">
                    <img src="images/image3.jpg">
                </div>
                <div class="content">
                    <h2>Card three</h2>
                    <p>Al obstinado escalador le tomó años de intentos y fracasos llegar a la cima para descubrir, tristemente, que allí tampoco está la felicidad.</p>
                    <a href="vote.php">Votar</a>
                </div>
            </div>
        </div>
        <div class="footer">
            Secretaría de Tecnología e Innovación - ISC 2021<br>
            SEUPB 2021
        </div>
    </body>
</html>

