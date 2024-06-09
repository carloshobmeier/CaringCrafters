<?php
session_start();
include('./connectTeste.php');
$userID = $_SESSION['id'];
$titulo = $_POST['titulo'];
$rua = $_POST['rua'];
$numero = $_POST['numero'];
$cidade = $_POST['cidade'];
$cep = $_POST['cep'];
$dataPostagem = date("Y-m-d");
$dataEvento = $_POST['dataEvento'];
$conteudo = $_POST['conteudo'];
$numeroVagas = $_POST['numeroVagas'];
$horaInicial = $_POST['horaInicial'];
$horaFinal = $_POST['horaFinal'];
$id_evento = $_POST['id_evento'];
$fk_Instituicao_id_Inst = $userID;

$sql = "UPDATE evento SET rua='$rua', numero='$numero', cidade='$cidade', cep='$cep', dataPostagem='$dataPostagem', dataEvento='$dataEvento', conteudo='$conteudo', numeroVagas='$numeroVagas', titulo='$titulo', horaInicial='$horaInicial', horaFinal='$horaFinal' WHERE id_evento='$id_evento';";

$stmt = $conn->prepare($sql);

$stmt->execute();
$stmt->close();
echo "Evento atualizado com sucesso.<br/>";
header("Location:../crud_eventos.php")

?>