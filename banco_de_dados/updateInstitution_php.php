<?php
session_start();

// Check if institution is logged in
if (!isset($_SESSION['id'])) {
    // Redirect to login page or handle the case where the institution is not logged in
    header("Location: login.php");
    exit();
}

// Assuming you have already established a database connection
include('./connectTeste.php');

// Retrieve institution's ID from session
$institutionID = $_SESSION['id'];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize inputs to prevent SQL injection
    $nomeFantasia = mysqli_real_escape_string($conn, $_POST['nomeFantasia']);
    $nomeAdm = mysqli_real_escape_string($conn, $_POST['nomeAdministrador']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $telefone = mysqli_real_escape_string($conn, $_POST['telefone']);
    $cidade = mysqli_real_escape_string($conn, $_POST['cidade']);
    $sobre = mysqli_real_escape_string($conn, $_POST['sobre']);

    $sqlSelect = "SELECT * FROM instituicao WHERE id_Inst = $institutionID";
    $result = $conn->query($sqlSelect);
    if ($result->num_rows > 0) {
        $userData = $result->fetch_assoc();
        $pass = $userData['senha'];
    }

    if ($_FILES['Imagem']['size'] == 0) {
        echo "sem img";
        $sqlU = "UPDATE instituicao SET 
                nomeFantasia = '$nomeFantasia',
                nomeAdministrador = '$nomeAdm',
                email = '$email',
                telefone = '$telefone', 
                cidade = '$cidade', 
                sobre = '$sobre' 
            WHERE 
                id_Inst = '$institutionID'";
    } else {
        echo "com img img";
        $profilePictureU = addslashes(file_get_contents($_FILES['Imagem']['tmp_name']));             
        $sqlU = "UPDATE instituicao SET 
                nomeFantasia = '$nomeFantasia',
                nomeAdministrador = '$nomeAdm',
                email = '$email',
                telefone = '$telefone', 
                cidade = '$cidade', 
                sobre = '$sobre' 
            WHERE 
                id_Inst = '$institutionID'";
    }
// Prepare and execute SQL query to update user's email
$stmt = $conn->prepare($sqlU);
// Execute the update statement
if ($stmt->execute()) {
    echo "Email updated successfully.";
    header("Location:../profile_institution.php");
} else {
    echo "Error updating email: " . $conn->error;
}

// Close statement and database connection
$stmt->close();
$conn->close();
}
?>
