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

    <main class="about">
        <div class="about-header">
            <h1>Árak</h1>
        </div>
        <div class="about-content">
        </div>
    </main>
    
    
    <div class="slides1" id="price-list-section">
        <div>
        <table border="1" id="price-table">
            <!-- A táblázatot most már üresen hagyjuk, majd JavaScripttel töltjük fel. -->
        </table>
        
    </div>
    <div>
        <img class="nyitv" src="img/nyitv22.jpg">
    </div>
</div>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    // Árak lekérdezése
    fetch('get_prices.php')
        .then(response => response.json())
        .then(prices => {
            // Táblázat elem referenciája
            const table = document.querySelector('#price-list-section table');

            // Árak hozzáadása a táblázathoz
            prices.forEach(price => {
                const row = table.insertRow(-1);
                const cell1 = row.insertCell(0);
                const cell2 = row.insertCell(1);

                cell1.textContent = price.style;
                cell2.textContent = price.price + ' Ft';
            });
        })
        .catch(error => console.error('Hiba:', error));
});

</script>
<footer>
    <p>&copy; 2023 Barber Shop Budapest. Minden jog fenntartva.</p>
</footer>
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
</body>

</html>