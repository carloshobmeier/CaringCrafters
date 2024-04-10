<?php
  $dbname = 'caringcrafters';
  $host = 'localhost';
  $user = 'root';
  $pass = 'PUC@1234';

  $pdoOptions = [
    PDO::ATTR_PERSISTENT => TRUE,
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
  ];

  try {
    $conn = new PDO('mysql:host=' . $host . ';dbname=' . $dbname, $user, $pass, $pdoOptions);
  } catch (PDOException $e) {
    echo 'Erro de conexão!', $e->getMessage();
  }
?>