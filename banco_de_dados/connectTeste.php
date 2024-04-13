<?php
  $database = 'caringcrafters';
  $servername = 'localhost';
  $username = 'root';
  $password = 'PUC@2023';

  $conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    echo "Connected successfully";
}
?>