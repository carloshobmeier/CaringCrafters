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
$fk_Instituicao_id_Inst = $userID;

$sql = "INSERT INTO evento (rua, numero, cidade, cep, dataPostagem, dataEvento, conteudo, numeroVagas, horaInicial, horaFinal, titulo, fk_Instituicao_id_Inst) VALUES ('$rua', '$numero', '$cidade', '$cep', '$dataPostagem', '$dataEvento', '$conteudo', '$numeroVagas', '$horaInicial', '$horaFinal', '$titulo', '$fk_Instituicao_id_Inst');";

$stmt = $conn->prepare($sql);

$stmt->execute();
$stmt->close();
echo "Evento criado com sucesso.<br/>";
header("Location:../crud_eventos.php")

?>