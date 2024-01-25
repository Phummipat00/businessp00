<?php
$serverName = "localhost";
$userName =  "root";
$userPassword = "";
$dbname = "business";

try {
  $conn = new PDO("mysql:host=$serverName;dbname=$dbname", $userName, $userPassword);


  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully";
} catch (PDOException $e) {
  echo "Sorry! You cannot connect to database";
}
