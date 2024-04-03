<?php
  include('./banco_de_dados/connect.php');

  if (isset($_POST['submitU'])) {
    $nomeU = $_POST['nameU'];
    $cpfU = $_POST['cpfU'];
    $emailU = $_POST['emailU'];
    $numeroU = $_POST['phonenumberU'];
    $cepU = $_POST['cepU'];
    $cidadeU = $_POST['cityU'];
    $dataNascimentoU = $_POST['birthdateU'];
    $generoU = $_POST['genderU'];
    $estadoCivilU = $_POST['martialstatusU'];
    $educacaoU = $_POST['educationU'];
    $nacionalidadeU = $_POST['nationalityU'];
    $ocupacaoU = $_POST['occupationU'];
    $experienciaU = $_POST['volunteering_experienceU'];
    $pass1U = $_POST['pass1U'];
    $pass2U = $_POST['pass2U'];

    if ($pass1U !== $pass2U) {
      die('Insira senhas iguais!');
    }

    $sqlU = "INSERT INTO usuario (nome,sobrenome,cpf,email,telefone,cep,cidadedataDeNascimento,genero,estadoCivil,escolaridade,nacionalidade,ocupacao,experienciaPrevia,senha) VALUES ('$nomeU','','$cpfU','$emailU','$numeroU','$cepU','$dataNascimentoU','$generoU','$estadoCivilU','$educacaoU','$nacionalidadeU','$ocupacaoU','$experienciaU',md5('$pass1U')";

    $prepU = $conn->prepare($sqlU);

    $exec = $prepU->execute();

    if ($exec) {
      echo('Cadastrado com sucesso!');
    } else {
      echo('Erro ao cadastrar!');
    }
  }
?>