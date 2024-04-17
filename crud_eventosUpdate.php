<?php
session_start();

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
    echo $counterPost;
}
$userID = $_SESSION['id'];

$result = $conn->query("SELECT * FROM evento WHERE fk_Instituicao_id_Inst = '$userID';");
$evento = $result->fetch_all(MYSQLI_ASSOC);
// Retrieve user's ID from session
?>
<form action="./banco_de_dados/eventoUpdate.php" method="post" class="form">
            <input type="hidden" name="id_evento" value="<?php echo $evento[$counterPost]['id_evento'] ?? ''; ?>">

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

            <button type="submit" class="btn btn-success" name="action" value="create">Atualizar</button>
        </form>