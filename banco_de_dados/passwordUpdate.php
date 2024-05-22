<?php

session_start();
include('./connectTeste.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $old_password = $_POST['old_password'];
    $new_password = $_POST['new_password'];
    $confirm_password = $_POST['confirm_password'];

    // Example user ID, in real case retrieve it from session or authentication context
    $user_id = $_SESSION['id'];

    if($new_password != $confirm_password){
        $_SESSION['error'] = "SenhaDiferente";
        header("Location:../changePassword.php");
    }else{

        
        $query = "SELECT * FROM usuario WHERE id_user = '$user_id' AND senha = '".md5($old_password)."'";
        $resultUser = mysqli_query($conn, $query);
        
        $queryInst = "SELECT * FROM instituicao WHERE id_Inst = '$user_id' AND senha = '".md5($old_password)."'";
        $resultInst = mysqli_query($conn, $query);
        
        
        if (mysqli_num_rows($resultUser) > 0) {
            $sqlNova = "UPDATE usuario SET senha='".md5($new_password)."'WHERE id_user = '$user_id';";
            $stmt = $conn->prepare($sqlNova);
            
            $stmt->execute();
            $stmt->close();
            header("Location:../profile_volunteer.php");
            echo "to aqui 1";
        }
        else if(mysqli_num_rows($resultInst) > 0){
            $sqlNova = "UPDATE instituicao SET senha='".md5($new_password)."'WHERE id_Inst = '$user_id';";
            $stmt = $conn->prepare($sqlNova);
            
            $stmt->execute();
            $stmt->close();
            header("Location:../profile_volunteer.php");
            echo "to aqui 2";
        }
        else{
            $_SESSION['error'] = "SenhaErrada";
            header("Location:../changePassword.php");
            echo "to aqui 3";
            
        }
    }
}