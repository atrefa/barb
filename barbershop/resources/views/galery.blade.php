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
    <footer class="footer">
        <h3><span id="demo">&copy;</span><a href="#">Barbershop Budapest</a></h3>
    </footer>

    <script src="js/index.js"></script>
</body>

</html>