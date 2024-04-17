<?php
session_start();
include('./connectTeste.php');
$userID = $_SESSION['id'];
$id_evento = $_POST['id_evento'];

$sql = "Delete from evento WHERE id_evento = '$id_evento';";

$stmt = $conn->prepare($sql);

$stmt->execute();
$stmt->close();
echo "Evento deletado com sucesso.<br/>";
header("Location:../crud_eventos.php")

?>