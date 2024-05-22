<?php
session_start();
if ($_SESSION['tipoCadastro'] !== 'admin') {
    header("Location: login.php");
    exit();
} else {
    include_once('./connectTeste.php');
    $id = $_GET['id'];

    $sql = "DELETE FROM instituicao WHERE id_Inst = '$id'";
    $result = mysqli_query($conn, $sql);
    if ($result === TRUE) {
    ?>
        <script>
            history.go(-1);
        </script>
    <?php
    } else {
        ?>
        <script>
            history.go(-1);
        </script>
        <?php
    }
}
?>