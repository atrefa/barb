<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Sikertelen kapcsolódás: " . mysqli_connect_error());
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM users WHERE email='$email'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_assoc($result);

    if (mysqli_num_rows($result) == 1) {
        if (password_verify($password, $row['password'])) {
            $_SESSION['user_id'] = $row['user_id'];
            echo "Sikeres bejelentkezés!";
        } else {
            echo "Hibás jelszó!";
        }
    } else {
        echo "Nem létezik ilyen felhasználó!";
    }
}
mysqli_close($conn);
?>
