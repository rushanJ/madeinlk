<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "kade";

// $servername = "localhost";
// $username = "u241276833_kade";
// $password = "rushan@@@kade";
// $dbname = "u241276833_kade";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>