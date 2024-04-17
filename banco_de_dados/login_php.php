<?php
  include_once('./connectTeste.php');

  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $senha = mysqli_real_escape_string($conn, $_POST['password']);

    $sql = "SELECT * FROM usuario WHERE email = '$email' AND senha = md5('$senha')";
    $result = mysqli_query($conn, $sql);
    
    // Ordem de procura: voluntário -> Instituição
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        
        session_start();
        $_SESSION['tipoCadastro'] = 'usuario';
        $_SESSION['id'] = $row['id_user'];
        $_SESSION['nome'] = $row['nome'];
        header("Location:../home.php");
    } else {
        $sql = "SELECT * FROM instituicao WHERE email = '$email' AND senha = md5('$senha')";
        $result = mysqli_query($conn, $sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);

            session_start();
            $_SESSION['tipoCadastro'] = 'instituicao';
            $_SESSION['id'] = $row['id_Inst'];
            $_SESSION['nome'] = $row['nomeFantasia'];
            header("Location:../home.php");
        } else {
            echo 'Cadastro inexistente';
        }
    }
  }
?>