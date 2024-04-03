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

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (email, password) VALUES ('$email', '$hashed_password')";
    if (mysqli_query($conn, $sql)) {
        $user_id = mysqli_insert_id($conn);
        $_SESSION['user_id'] = $user_id;
        echo "Sikeres regisztráció!";
    } else {
        echo "Hiba a regisztráció során: " . mysqli_error($conn);
    }
}
mysqli_close($conn);
?>
