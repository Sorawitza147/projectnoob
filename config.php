<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbName = "member";

$conn = new mysqli($servername, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
