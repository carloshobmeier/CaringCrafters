
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulário de Evento</title>
  <!-- Inclua o CSS do Bootstrap -->
   <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/profile.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<?php
include('./components/controle_expiracao.php');

// Check if the session variable 'id' is not set
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
// Conexão com o banco de dados
include('./banco_de_dados/connectTeste.php');

if(isset($_POST['id_counter'])) {
    $counterPost = $_POST['id_counter'];
    // You can use $counterPost in your modal content
    // echo $counterPost;
}
$userID = $_SESSION['id'];

$result = $conn->query("SELECT * FROM evento WHERE fk_Instituicao_id_Inst = '$userID';");
$evento = $result->fetch_all(MYSQLI_ASSOC);
// Retrieve user's ID from session
?>
<div class="container align-content-center">
<div class="row">
<div class="col-2">

</div>

    <div class="col-7" style="border: 2px solid rgba(0, 0, 0, 0.5); border-radius: 5px; padding: 30px; box-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2); margin: 35px; margin-bottom: 60px;">
    <div style="container">
        <h2 style="margin-bottom: 25px;">Edição de Evento:</h2>
    </div>
    <div class="container content">
        <form action="./banco_de_dados/eventoUpdate.php" method="post" class="form">
            <input type="hidden" name="id_evento" value="<?php echo $evento[$counterPost]['id_evento'] ?? ''; ?>">

            <div class="mb-3">
                <label for="titulo" class="form-label">Título</label>
                <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento" value="<?php echo $evento[$counterPost]['titulo'] ; ?>" required>
            </div>

            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?php echo $evento[$counterPost]['rua'] ; ?>" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo $evento[$counterPost]['numero'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $evento[$counterPost]['cidade'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?php echo $evento[$counterPost]['cep'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="dataEvento" class="form-label">Data do Evento</label>
                <input type="date" class="form-control" id="dataEvento" name="dataEvento" placeholder="Data do Evento" value="<?php echo $evento[$counterPost]['dataEvento'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" placeholder="Conteúdo" rows="3"><?php echo $evento[$counterPost]['conteudo'] ?? ''; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="numeroVagas" class="form-label">Número de Vagas</label>
                <input type="number" class="form-control" id="numeroVagas" name="numeroVagas" placeholder="Número de Vagas" value="<?php echo $evento[$counterPost]['numeroVagas'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="horaInicial" class="form-label">Hora Inicial</label>
                <input type="time" class="form-control" id="horaInicial" name="horaInicial" placeholder="Hora Inicial" value="<?php echo $evento[$counterPost]['horaInicial'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="horaFinal" class="form-label">Hora Final</label>
                <input type="time" class="form-control" id="horaFinal" name="horaFinal" placeholder="Hora Final" value="<?php echo $evento[$counterPost]['horaFinal'] ?? ''; ?>" required>
            </div>

            <div class="modal-footer">
                <button type="submit" class="btn btn-success mx-2" name="action" value="create">Atualizar</button>
                <button onclick="location.href='crud_eventos.php';" class="btn btn-secondary">Cancelar</a>
            </div>
        </form>

    </div>
        </div>
        <div class="col-2">
    
</div>
        </div>
        </div>
