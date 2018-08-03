<?php
$srv = "localhost";
$uname = "root";
$pwd = "";
$dbname = "crud";

$conn = new mysqli($srv, $uname, $pwd, $dbname);
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
?>