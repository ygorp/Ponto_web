<?php
$servername = "localhost";
$username = "root";
$password = "P@checo7292";
$dbname = "ponto_web";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
