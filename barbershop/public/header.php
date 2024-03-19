<?php
session_start();
if (isset($_SESSION['user_id'])){
    echo '
    <header>
        <div class="title"><p>Barbershopbp</p></div>
        <nav class="links">
            <a href="/">Home</a>
            <a href="galery">Munkáink</a>
            <a href="about">Árak</a>
            <a href="contact">Kapcsolat</a>
            <a href="logout">Log out</a>
        </nav>
    </header>';
} else {
    echo '
    <header>
        <div class="title"><p>Barbershopbp</p></div>
        <nav class="links">
            <a href="/">Home</a>
            <a href="Animes">Animes</a>
            <a href="latest">Latest</a>
            <a href="login">Log in</a>
            <a href="register">Register</a>
        </nav>
        <div class="search">
            <input class="search-bar" id="kereso" placeholder="Search">
        </div>
    </header>';
}
?>
 
$_SESSION['user_id'] = $row["user_id"]