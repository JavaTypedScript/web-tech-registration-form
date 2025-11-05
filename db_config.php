<?php
$servername = "sql308.infinityfree.com"; // replace with your InfinityFree MySQL host
$username = "if0_40341056";
$password = "JSTxlNjQ45gft";
$dbname = "if0_40341056_registrations";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
?>
