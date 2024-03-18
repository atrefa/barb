<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/barb.css">
</head>

<body>
    <header class="header">
        <div class="container container-nav">
            <div class="site-title">
                <h1>Barbershop Budapest</h1>
                <p class="subtitle">Getting your hair ready</p>
            </div>
            <nav>
                <ul>
                    <li><a href="/">Home</a></li>
                    <li><a href="galery" class="current-page">Munkáink</a></li>
                    <li><a href="about">Árak</a></li>
                    <li><a href="contact">Kapcsolat</a></li>
                    <li><a href="#" onclick="openLoginPopup()">Bejelentkezés</a></li>
                </ul>

            </nav>
        </div>
    </header>
    <main>
        <div class="gallery-header">
            <h1>Galéria</h1>
            <p>Várunk vissza!</p>
        </div>
        <div class="row gallery-row">
            <div class="column">
                <img src="img/1.jpg" alt="" style="width: 100%">
                <img src="img/2.jpg" alt="" style="width: 100%">
                <img src="img/3.jpg" alt="" style="width: 100%">
                <img src="img/4.jpg" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/5.jpg" alt="" style="width: 100%">
                <img src="img/6.jpg" alt="" style="width: 100%">
                <img src="img/7.jpg" alt="" style="width: 100%">
                <img src="img/8.jpg" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/9.jpg" alt="" style="width: 100%">
                <img src="img/10.jpg" alt="" style="width: 100%">
                <img src="img/11.jpg" alt="" style="width: 100%">
                <img src="img/12.jpg" alt="" style="width: 100%">
            </div>
            <div class="column">
                <img src="img/13.jpg" alt="" style="width: 100%">
                <img src="img/14.jpg" alt="" style="width: 100%">
                <img src="img/16.jpg" alt="" style="width: 100%">
                <img src="img/18.jpg" alt="" style="width: 100%">
            </div>
        </div>
    </main>
    <div class="popup" id="loginPopup">
            <div class="popup-content">
                <span class="close" onclick="closeLoginPopup()">&times;</span>
                <h2>Bejelentkezés</h2>
                <form>
                    <input type="email" class="login-input" placeholder="E-mail cím" required>
                    <input type="password" class="login-input" placeholder="Jelszó" required>
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
<footer>
    <p>&copy; 2023 Barber Shop Budapest. Minden jog fenntartva.</p>
</footer>