<?php
$servername = "localhost";
$username = "houser3l_houseof_xp_user";
$password = "nc@4;0-O@5PH";

try {
  $conn = new PDO("mysql:host=$servername;dbname=houser3l_houseof_xp", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  //echo "Connected successfully";
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}
?>