<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Barbershop Budapest</title>
    <link rel="stylesheet" href="css/barb.css">
    <style>
        #home {
            background: url('img/video.mp4') no-repeat center center fixed;
            height: 85vh;
            position: relative;
            width: 100%;
            background-size: cover;
        }
    </style>
</head>

<body>
<?php
 include 'header.php';
?>
    <main>
        <div id="home">
        <video id="background-video" autoplay loop muted poster="https://assets.codepen.io/6093409/river.jpg">
        <source src="img/video.mp4" type="video/mp4" id="video">
</video>

            <div class="overlay">
                <div class="landing-text">
                    <h3>Getting your hair ready</h3>
                    <h1>Barbershop Budapest</h1>
                    <hr id="hr-main">
                    <?php
                        if (isset($_SESSION['user_id'])){
                            echo '
                            <a href="contact" class="button btn-hire">Időpontfoglalás</a>
                           ';
                        }
                    ?>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

<div class="popup" id="loginPopup">
            <div class="popup-content">
                <span class="close">&times;</span>
                <h2>Bejelentkezés</h2>
                <form>
                    <input type="email" class="login-input" placeholder="E-mail cím" name="email" id="email" required>
                    <input type="password" class="login-input" placeholder="Jelszó" name="jelszo" id="jelszo" required>
                    <button type="button" class="login-button" onclick="login()">Bejelentkezés</button>
                </form>
                <p>Vagy</p>
                <button type="button" class="register-button" onclick="register()">Regisztráció</button>
            </div>
        </div>
    </main>
    <script src="js/barb.js"></script> 
 