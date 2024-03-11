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
    <header class="header">
        <div class="container container-nav">
            <div class="site-title">
                <h1>Barbershop Budapest</h1>
                <p class="subtitle">Getting your hair ready</p>
            </div>
            <nav>
                <ul>
                    <li><a href="/" class="current-page">Home</a></li>
                    <li><a href="galery">Munkáink</a></li>
                    <li><a href="about">Árak</a></li>
                    <li><a href="contact">Kapcsolat</a></li>
                    <li><a href="#" onclick="openLoginPopup()">Bejelentkezés</a></li>
                </ul>

            </nav>
        </div>
    </header>
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
                    <a href="contact" class="button btn-hire">Időpontfoglalás</a>
                </div>
            </div>
        </div>
    </main>
</body>

</html>

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

    <script>
        function openLoginPopup() {
            document.getElementById('loginPopup').style.display = 'block';
        }

        function closeLoginPopup() {
            document.getElementById('loginPopup').style.display = 'none';
        }

        function login() {
            
            alert('Bejelentkezés sikeres!');
            closeLoginPopup();
        }

        function register() {
            alert('Regisztráció sikeres!');
            closeLoginPopup();
        }
    </script>