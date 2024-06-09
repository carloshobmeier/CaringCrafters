
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Evento</title>
  <!-- Inclua o CSS do Bootstrap -->
   <link rel="stylesheet" href="./style/setup.css">
       <link rel="stylesheet" href="./style/profile.css">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include('./components/controle_expiracao.php');

// Check if the session variable 'id' is not set
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
// Conexão com o banco de dados
include('./banco_de_dados/connectTeste.php');

if(isset($_POST['id_counter'])) {
    $counterPost = $_POST['id_counter'];
    // You can use $counterPost in your modal content
    // echo $counterPost;
}
$userID = $_SESSION['id'];

$result = $conn->query("SELECT * FROM evento WHERE fk_Instituicao_id_Inst = '$userID';");
$evento = $result->fetch_all(MYSQLI_ASSOC);
// Retrieve user's ID from session
?>
<div class="container align-content-center">
<div class="row">
<div class="col-2">

</div>

    <div class="col-7" style="border: 2px solid rgba(0, 0, 0, 0.5); border-radius: 5px; padding: 30px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); margin: 35px; margin-bottom: 60px;">
    <div style="container">
        <h2 style="margin-bottom: 25px;">Alterar Senha:</h2>
    </div>
    <div class="container content">
        <form class="d-flex flex-column" action="./banco_de_dados/passwordUpdate.php" method="post" class="form">

            <label for="old_password">Senha Antiga:</label>
            <input type="text" id="old_password" name="old_password" >

            <label class="mt-4" for="new_password">Nova Senha:</label>
            <input required minlength="8" type="text" id="new_password" name="new_password" >

            <label class="mt-4" for="confirm_password">Confirme a Nova Senha:</label>
            <input  required minlength="8" type="text   echo " id="confirm_password" name="confirm_password" >

            <div class="mt-4 d-flex align-items-center justify-content-around">
                <a href="profile_volunteer.php" class="btn btn-secondary col-5">Cancelar</a>
                <button type="submit"  class="btn btn-success col-5 mb-0" name="action" value="create">Atualizar</button>
            </div>
            
        </form>

    </div>
        </div>
        <div class="col-2">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            function wrongPassword() {
                swal.fire({
                        title: "Credenciais Erradas!",
                        text: "A senha inserida estao invalida.",
                        icon: "warning"
                        });
            }
            function notMatchingPassword() {
                swal.fire({
                        title: "Novas Senhas Diferentes!",
                        text: "Favor inserir senhas iguais.",
                        icon: "warning"
                        });
            }

        </script>
        <?php

        if(isset($_SESSION['error'])){
            echo $_SESSION['error'];
            if($_SESSION['error'] =="SenhaErrada"){
                echo "<script>wrongPassword()</script>";
            }else{
                echo "<script>notMatchingPassword()</script>";
            }
            unset($_SESSION['error']);
            
        }

?>
    </div>
        </div>
        </div>
