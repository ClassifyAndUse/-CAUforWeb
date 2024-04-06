<?php
// Path: settings.php
// connecct to MariaDB
$conn = new mysqli('100.67.158.142', 'cau', 'aA12345678.', 'cau', 3306);
// if connection fails, print error
if (!$conn) {
    die("Connection failed: ".mysqli_connect_error());
}
?>