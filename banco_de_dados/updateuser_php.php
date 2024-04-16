<?php
session_start();

// Check if user is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page or handle the case where the user is not logged in
    header("Location: login.php");
    exit();
}

// Assuming you have already established a database connection
// Replace 'localhost', 'username', 'password', and 'database_name' with your actual database credentials
include('./connectTeste.php');


// Retrieve user's ID from session
$userID = $_SESSION['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent SQL injection
    $nomeU = mysqli_real_escape_string($conn, $_POST['nameU']);
    #$sobrenomeU = mysqli_real_escape_string($conn, $_POST['sobrenome']);
    //$cpfU = mysqli_real_escape_string($conn, $_POST['cpfU']);
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
    $newPass = mysqli_real_escape_string($conn, $_POST['pass1U']);
    
    $sqlSelect = "SELECT * FROM usuario WHERE id_user = $userID";
    $result = $conn->query($sqlSelect);
    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        $pass = $userData['senha'];
    }
    if (md5($newPass) == $pass || $newPass == ""){
        $newPass = $pass;
    }
// Prepare and execute SQL query to update user's email
    $sqlU = "UPDATE usuario SET 
                nome = '$nomeU', 
                email = '$emailU',
                telefone = '$numeroU', 
                cep = '$cepU', 
                cidade = '$cidadeU', 
                dataDeNascimento = '$dataNascimentoU', 
                genero = '$generoU', 
                estadoCivil = '$estadoCivilU', 
                escolaridade = '$educacaoU', 
                nacionalidade = '$nacionalidadeU', 
                ocupacao = '$ocupacaoU', 
                experienciaPrevia = '$experienciaU', 
                senha = md5('$newPass') 
            WHERE 
                id_user = '$userID'";
$stmt = $conn->prepare($sqlU);
// Execute the update statement
if ($stmt->execute()) {
    echo "Email updated successfully.";
    header("Location:../profile_volunteer.php");
} else {
    echo "Error updating email: " . $conn->error;
}

// Close statement and database connection
$stmt->close();
$conn->close();
}
?>
