<?php
$host = "localhost";
$user = "root";
$pass = "";
$dbname = "user_auth";

$conn = new mysqli($host, $user, $pass, $dbname);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
