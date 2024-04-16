<?php
  include('./connect.php');

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

    $execU = $prepU->execute();

    if ($exec) {
      echo 'Cadastrado com sucesso!';
    } else {
      echo 'Erro ao cadastrar!';
    }
  }

  if (isset($_POST['submitI'])) {
    $emailI = $_POST['emailI'];
    $numeroI = $_POST['phonenumberI'];
    $cepI = $_POST['cepI'];
    $cidadeI = $_POST['cityI'];
    $razaoI = $_POST['reasonI'];
    $nomeI = $_POST['nameI'];
    $cnpjI = $_POST['cnpjI'];
    $dataI = $_POST['dateI'];
    $socialI = $_POST['socialI'];
    $nomeAdmin = $_POST['adminNameI'];
    $horaTrabalho = $_POST['woringHourI'];
    $educacaoI = $_POST['educationI'];
    $mentoriaI = $_POST['montoringI'];
    $conselhoI = $_POST['counselingI'];
    $administracaoI = $_POST['administrationI'];
    $pass1I = $_POST['pass1I'];
    $pass2I = $_POST['pass2I'];

    if ($pass1I !== $pass2I) {
      die('Senhas devem ser iguais!');
    }

    $sqlI = "INSERT INTO instituicao (nomeFantasia,nomeAdministrador,email,telefone,cep,cidade,razaoSocial,cnpj,dataFundacao,capitalSocial,horaInicial,horaFinal,senha) VALUES ('$nomeI','$administracaoI','$emailI','$numeroI','$cepI','$cidadeI','$razaoI','$cnpjI','$dataI','$socialI','','',$pass1I)";
  }

  $prepI = $conn->prepare($sqlI);

  $execI = $prepI->execute();

  if ($execI) {
    echo 'Cadastro bem-sucedido!';
    header("Location: ../home.php");

  } else {
    echo 'Cadastro mal-sucedido!';
  }
?>