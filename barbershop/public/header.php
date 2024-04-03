<?php
session_start();
if (isset($_SESSION['user_id'])){
    echo '
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
                <li><a href="logout.php">Kijelentkezés</a></li>
            </ul>

        </nav>
    </div>
</header>';
} else {
    echo '
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
                    <li><a href="#" onclick="openLoginPopup()">Bejelentkezés</a></li>
                </ul>

            </nav>
        </div>
    </header>';
}
?>
