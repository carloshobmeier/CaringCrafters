<?php
  include_once('./banco_de_dados/connect.php');

  if (isset($_POST['entrar'])) {
    $email = $_POST['form-email'];
    $senha = $_POST['form-password'];

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = md5('$senha')";

    $prep = $conn->prepare($sql);

    $exec = $prep->execute();

    if ($exec) {
      echo('Log In bem-sucedido!');
    } else {
      echo('Deu ruim.');
    }
  }
?>