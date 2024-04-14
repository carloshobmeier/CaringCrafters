<?php
// Assuming you have already established a connection to your MySQL database
include('./connectTeste.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent SQL injection
    $emailI = mysqli_real_escape_string($conn, $_POST['emailI']);
    $numeroI = mysqli_real_escape_string($conn, $_POST['phonenumberI']);
    $cepI = mysqli_real_escape_string($conn, $_POST['cepI']);
    $cidadeI = mysqli_real_escape_string($conn, $_POST['cityI']);
    $razaoI = mysqli_real_escape_string($conn, $_POST['reasonI']);
    $nomeI = mysqli_real_escape_string($conn, $_POST['nameI']);
    $cnpjI = mysqli_real_escape_string($conn, $_POST['cnpjI']);
    $dataI = mysqli_real_escape_string($conn, $_POST['dateI']);
    $socialI = mysqli_real_escape_string($conn, $_POST['socialI']);
    $nomeAdmin = mysqli_real_escape_string($conn, $_POST['adminNameI']);
    $horaTrabalho = mysqli_real_escape_string($conn, $_POST['workingHourI']);
    #$educacaoI = mysqli_real_escape_string($conn, $_POST['educationI']);
    #$mentoriaI = mysqli_real_escape_string($conn, $_POST['monitoringI']);
    #$conselhoI = mysqli_real_escape_string($conn, $_POST['counselingI']);
    $administracaoI = mysqli_real_escape_string($conn, $_POST['adminNameI']);
    $pass1I = mysqli_real_escape_string($conn, $_POST['pass1I']);
    #$pass2I = mysqli_real_escape_string($conn, $_POST['pass2I']);


    // Construct the SQL query
    $sqlI = "INSERT INTO instituicao (id_Inst,nomeFantasia,nomeAdministrador,email,telefone,cep,cidade,razaoSocial,cnpj,dataFundacao,capitalSocial,horaInicial,horaFinal,senha) VALUES (21,'$nomeI','$administracaoI','$emailI','$numeroI','$cepI','$cidadeI','$razaoI','$cnpjI','$dataI','$socialI','','',md5('$pass1I'))";

    // Execute the query
    if (mysqli_query($conn, $sqlI)) {
        echo 'Cadastrado com sucesso!';
        header("Location:../home.php");
    } else {
        echo 'Erro ao cadastrar: ' . mysqli_error($conn); // Output the specific error message
    }
}
?>
