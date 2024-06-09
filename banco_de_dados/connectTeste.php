<?php
  $database = 'caringcrafters';
  $servername = 'localhost:3308';
  $username = 'root';
  $password = 'PUC@1234';

  $conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    $status = "Connected Successfully.";
}
?>