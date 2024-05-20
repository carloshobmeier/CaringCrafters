<!DOCTYPE html>

<?php
include('./components/controle_expiracao.php');

// Check if the session variable 'id' is not set
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
?>

<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eventos</title>
</head>

<body>
    <?php 
    if (!isset($_SESSION['id'])) {
        include('./components/navbar_index.php');
    } else {
        if($_SESSION['tipoCadastro'] === 'usuario') {
            include("./components/navbar_logado_usuario.php");
        } elseif ($_SESSION['tipoCadastro'] === 'usuario') {
            include("./components/navbar_logado_usuario.php");
        }
    }
    ?>
    

    <div class="container text-center">
        <h1 style="margin-bottom: 35px;">Eventos</h1>
    </div>

    <?php
// Conexão com o banco de dados
include('./banco_de_dados/connectTeste.php');


// Retrieve user's ID from session
$userID = $_SESSION['id'];


// Listagem de todos os eventos
$result = $conn->query("SELECT * FROM evento"); 
$evento = $result->fetch_all(MYSQLI_ASSOC);
?>

<!-- Tabela para exibir eventos -->
<div class="container">
    <h2> Lista de Eventos:</h2> 
        <table class="table table-striped table-bordered table-hover table-responsive">
            <tr>
                <th>ID</th>
                <th>Conteúdo</th>
                <th>Cidade</th>
                <th>Rua</th>
                <th>Número</th>
                <th>Postado em</th>
                <th>Data do Evento</th>
                <th>Hora Inicial</th>
                <th>Hora Final</th>
                <th>Vagas</th>
                <th>Participar?</th>
            </tr>
            <?php 
            $counter = 0;
            foreach ($evento as $eventos) { ?>
            <tr>
                <td><?php echo htmlspecialchars($eventos['id_evento']); ?></td>
                <td><?php echo htmlspecialchars($eventos['conteudo']); ?></td>
                <td><?php echo htmlspecialchars($eventos['cidade']); ?></td>
                <td><?php echo htmlspecialchars($eventos['rua']); ?></td>
                <td><?php echo htmlspecialchars($eventos['numero']); ?></td>
                <td><?php echo htmlspecialchars($eventos['dataPostagem']); ?></td>
                <td><?php echo htmlspecialchars($eventos['dataEvento']); ?></td>
                <td><?php echo htmlspecialchars($eventos['horaInicial']); ?></td>
                <td><?php echo htmlspecialchars($eventos['horaFinal']); ?></td>
                <td><?php echo htmlspecialchars($eventos['numeroVagas']); ?></td>
            </tr>
            <?php  
            $counter++;}?>
        </table>
</div>    
        
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php
                if(isset($_POST['id_evento'])) {
                    $counterPost = $_POST['id_evento'];
                    // You can use $counterPost in your modal content
                }
        ?>
    </div>

<?php include('./components/footer.php') ?>
</body>
</html>