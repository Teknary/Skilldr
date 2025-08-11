<?php
$host = "sql7.freesqldatabase.com"; // Your database host
$user = "sql7794619";              // Your DB username
$pass = "IsPPcRhLeX";              // Your DB password
$dbname = "sql7794619";               // Your database name
$port = 3306;                         // Your port (usually 3306)

$conn = new mysqli($host, $user, $pass, $dbname, $port);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
