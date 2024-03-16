<?php
// Path: settings.php
// connecct to MariaDB
$servername = "100.67.158.142";
$username = "cau";
$password = "aA12345678.";
$dbname = "CAU";
$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}