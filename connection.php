<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tevily_db";
$mysqli = new mysqli($servername,$username,$password,$dbname);

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
} else {
    echo "Connected successfully";
}
?>