<?php
// Assuming you have already established a connection to your MySQL database
include('./connectTeste.php');

// Check if the form was submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent SQL injection
    $nomeU = mysqli_real_escape_string($conn, $_POST['nameU']);
    $sobrenomeU = mysqli_real_escape_string($conn, $_POST['surnameU']);
    $cpfU = mysqli_real_escape_string($conn, $_POST['cpfU']);
    $emailU = mysqli_real_escape_string($conn, $_POST['emailU']);
    $numeroU = mysqli_real_escape_string($conn, $_POST['phonenumberU']);
    $cepU = mysqli_real_escape_string($conn, $_POST['cepU']);
    $cidadeU = mysqli_real_escape_string($conn, $_POST['cityU']);
    $dataNascimentoU = mysqli_real_escape_string($conn, $_POST['birthdateU']);
    $generoU = mysqli_real_escape_string($conn, $_POST['genderU']);
    $estadoCivilU = mysqli_real_escape_string($conn, $_POST['martialstatusU']);
    $educacaoU = mysqli_real_escape_string($conn, $_POST['educationU']);
    $nacionalidadeU = mysqli_real_escape_string($conn, $_POST['nationalityU']);
    $ocupacaoU = mysqli_real_escape_string($conn, $_POST['occupationU']);
    $experienciaU = mysqli_real_escape_string($conn, $_POST['volunteering_experienceU']);
    $pass1U = mysqli_real_escape_string($conn, $_POST['pass1U']);

    // Construct the SQL query
    $sqlU = "INSERT INTO usuario (nome, sobrenome, cpf, email, telefone, cep, cidade,dataDeNascimento, genero, estadoCivil, escolaridade, nacionalidade, ocupacao, experienciaPrevia, senha) VALUES ('$nomeU', '$sobrenomeU', '$cpfU', '$emailU', '$numeroU', '$cepU','$cidadeU', '$dataNascimentoU', '$generoU', '$estadoCivilU', '$educacaoU', '$nacionalidadeU', '$ocupacaoU', '$experienciaU', md5('$pass1U'))";

    // Execute the query
    if (mysqli_query($conn, $sqlU)) {
        echo 'Cadastrado com sucesso!';
        header("Location:../home.php");
    } else {
        echo 'Erro ao cadastrar: ' . mysqli_error($conn); // Output the specific error message
    }
}
?>
