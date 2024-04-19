<!DOCTYPE html>
<html lang="hu">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/barb.css">
</head>
<body>
<?php
 include 'header.php';
?>
    <main class="contact">
        <h1>Vedd fel velünk a kapcsolatot!</h1>
        <div class="flex-container">
            <div class="flex-item-left">
                <h4>Cím</h4>
                <p><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2695.1213824386364!2d19.069226276519487!3d47.50702727118083!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4741dc6ecc2d2bb9%3A0x328371a2dc55baa6!2sBudapest%2C%20Kir%C3%A1ly%20u.!5e0!3m2!1shu!2shu!4v1700058523311!5m2!1shu!2shu" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></p>
                <p>Király utca 123</p>
                <p>Budapest,Magyarország</p>
                <h4>Telefonszám</h4>
                <p>+36 20 399 4475</p>
                <h4>E-mail</h4>
                <p>barbershopbudapest@gmail.com</p>
                <h4>Nyitvatartás</h4>
                <p>H-Sz: 9:00-19:00 -
                    Vasárnap Zárva.</p>
            </div>
        </div>
    </main>
    <footer>
    <p>&copy; 2023 Barber Shop Budapest. Minden jog fenntartva.</p>
</footer>
<div class="popup" id="loginPopup">
            <div class="popup-content">
                <span class="close"onclick='closeLoginPopup()'>&times;</span>
                <h2>Bejelentkezés</h2>
                <h4>A Kapcsolat eléréséhez Regisztráció vagy Bejelentkezés szükséges!</h4>
                <form>
                    <input type="email" class="login-input" placeholder="E-mail cím" name="email" id="email" required>
                    <input type="password" class="login-input" placeholder="Jelszó" name="jelszo" id="jelszo" required>
                    <button type="button" class="login-button" onclick="login()">Bejelentkezés</button>
                </form>
                <p>Vagy</p>
                <button type="button" class="register-button" onclick="register()">Regisztráció</button>
            </div>
        </div>
    <script src="js/barb.js"></script>
</body>
</html>