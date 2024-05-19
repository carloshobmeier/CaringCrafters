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

    $query = "SELECT * FROM usuario WHERE cpf = '$cpfU'";
    $resultCPF = mysqli_query($conn, $query);

    if (mysqli_num_rows($resultCPF) > 0) {
        // CPF already exists
        echo "This CPF already exists in the database.";
        session_start();
        $_SESSION['typeForm'] = "user";
        $_SESSION['nomeU'] = $nomeU;
        $_SESSION['sobrenomeU'] = $sobrenomeU;
        $_SESSION['cpfU'] = $cpfU;
        $_SESSION['emailU'] = $emailU;
        $_SESSION['numeroU'] = $numeroU;
        $_SESSION['cepU'] = $cepU;
        $_SESSION['cidadeU'] = $cidadeU;
        $_SESSION['dataNascimentoU'] = $dataNascimentoU;
        $_SESSION['generoU'] = $generoU;
        $_SESSION['estadoCivilU'] = $estadoCivilU;
        $_SESSION['educacaoU'] = $educacaoU;
        $_SESSION['nacionalidadeU'] = $nacionalidadeU;
        $_SESSION['ocupacaoU'] = $ocupacaoU;
        $_SESSION['experienciaU'] = $experienciaU;
        $_SESSION['pass1U'] = $pass1U;
        header("Location:../signin.php");
    } else {
        // CPF does not exist, proceed with your logic
        echo "This CPF is available.";

        if ($_FILES['Imagem']['size'] == 0) {
            $profilePictureU = addslashes(file_get_contents("../assets/images/pessoa.jpg"));
        } else {                             
            $profilePictureU = addslashes(file_get_contents($_FILES['Imagem']['tmp_name']));
        }

        // Construct the SQL query
        $sqlU = "INSERT INTO usuario (nome, sobrenome, cpf, email, telefone, cep, cidade,dataDeNascimento, genero, estadoCivil, escolaridade, nacionalidade, ocupacao, experienciaPrevia, foto, senha) VALUES ('$nomeU', '$sobrenomeU', '$cpfU', '$emailU', '$numeroU', '$cepU','$cidadeU', '$dataNascimentoU', '$generoU', '$estadoCivilU', '$educacaoU', '$nacionalidadeU', '$ocupacaoU', '$experienciaU', '$profilePictureU' ,md5('$pass1U'))";

        // Execute the query
        if (mysqli_query($conn, $sqlU)) {   


            $sql = "SELECT * FROM usuario WHERE email = '$emailU'";
            $result = mysqli_query($conn, $sql);

            $row = mysqli_fetch_assoc($result);
            
            session_start();
            $_SESSION['tipoCadastro'] = 'usuario';
            $_SESSION['id'] = $row['id_user'];
            $_SESSION['nome'] = $row['nome'];
            echo 'Cadastrado com sucesso!';
            header("Location:../home.php");
        } else {
            echo 'Erro ao cadastrar: ' . mysqli_error($conn); // Output the specific error message
        }
    }
}
?>
