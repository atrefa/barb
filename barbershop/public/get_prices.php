
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

// Adatbázis kapcsolat létrehozása
$conn = new mysqli($servername, $username, $password, $dbname);

// Kapcsolat ellenőrzése
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Árak lekérdezése
$sql = "SELECT StyleName, Price FROM HaircutStyles JOIN Prices ON HaircutStyles.HaircutStyleID = Prices.HaircutStyleID";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Árak JSON formátumban
    $prices = array();
    while ($row = $result->fetch_assoc()) {
        $prices[] = array("style" => $row["StyleName"], "price" => $row["Price"]);
    }

    // JSON kimenet
    header('Content-Type: application/json');
    echo json_encode($prices);
} else {
    echo "Nincsenek árak.";
}

// Adatbázis kapcsolat bezárása
$conn->close();
?>