<!DOCTYPE html>

<?php
session_start();

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
    <title>Gerenciar Eventos</title>
</head>
<body>
    <?php include('./components/navbar_logado.php') ?>
    

    <div class="container text-center">
        <h1 style="margin-bottom: 35px;">Gerenciar eventos</h1>
    </div>

        <?php
// Conexão com o banco de dados
include('./banco_de_dados/connectTeste.php');


// Retrieve user's ID from session
$userID = $_SESSION['id'];

// Manipulação de ações do CRUD

// Listagem de eventos
$result = $conn->query("SELECT * FROM evento WHERE fk_Instituicao_id_Inst = '$userID';");
$evento = $result->fetch_all(MYSQLI_ASSOC);

?>



<div class="container">

<div class="row">
    <div class="col-3">
        <h2>Adicionar Evento</h2>
        <!-- Formulário para adicionar ou atualizar eventos -->
        <form action="./banco_de_dados/eventoCreate.php" method="post" class="form">
            <input type="hidden" name="id_evento" value="<?php echo $evento['id_evento'] ?? ''; ?>">

            <div class="mb-3">
                <label for="rua" class="form-label">Rua</label>
                <input type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?php echo $evento['rua'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="numero" class="form-label">Número</label>
                <input type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo $evento['numero'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="cidade" class="form-label">Cidade</label>
                <input type="text" class="form-control" id="cidade" name="cidade" placeholder="Cidade" value="<?php echo $evento['cidade'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="cep" class="form-label">CEP</label>
                <input type="text" class="form-control" id="cep" name="cep" placeholder="CEP" value="<?php echo $evento['cep'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="dataEvento" class="form-label">Data do Evento</label>
                <input type="date" class="form-control" id="dataEvento" name="dataEvento" placeholder="Data do Evento" value="<?php echo $evento['dataEvento'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="conteudo" class="form-label">Conteúdo</label>
                <textarea class="form-control" id="conteudo" name="conteudo" placeholder="Conteúdo" rows="3"><?php echo $evento['conteudo'] ?? ''; ?></textarea>
            </div>

            <div class="mb-3">
                <label for="numeroVagas" class="form-label">Número de Vagas</label>
                <input type="number" class="form-control" id="numeroVagas" name="numeroVagas" placeholder="Número de Vagas" value="<?php echo $evento['numeroVagas'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="horaInicial" class="form-label">Hora Inicial</label>
                <input type="time" class="form-control" id="horaInicial" name="horaInicial" placeholder="Hora Inicial" value="<?php echo $evento['horaInicial'] ?? ''; ?>" required>
            </div>

            <div class="mb-3">
                <label for="horaFinal" class="form-label">Hora Final</label>
                <input type="time" class="form-control" id="horaFinal" name="horaFinal" placeholder="Hora Final" value="<?php echo $evento['horaFinal'] ?? ''; ?>" required>
            </div>


            <button type="submit" class="btn btn-success" name="action" value="create" style="margin-bottom: 20px;">Criar</button>
        </form>

        </div>

        <div class="col-9">

        <!-- Tabela para exibir eventos -->
        <h2>Lista de Eventos:</h2>
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
                <th>Ações</th>
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
                <td>
                    <form method="POST" action="./crud_eventosUpdate.php">
                        <input type="hidden" name="id_counter" value="<?php echo $counter; ?>">
                        <input type="submit" class="btn mb-4 btn-success"  style="font-size: 14px" name="action" value="Editar">
                    </form>
                    <form method="post" action="./banco_de_dados/eventoDelete.php">
                        <input type="hidden" name="id_evento" value="<?php echo $eventos['id_evento']; ?>">
                        <input type="submit" class="btn mb-4"  style="font-size: 14px; background-color: #efa34c; color: white;" name="action" value="Deletar" >
                    </form>
                </td>
            </tr>
            <?php  
            $counter++;}?>
        </table>
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <?php
                if(isset($_POST['id_evento'])) {
                    $counterPost = $_POST['id_evento'];
                    // You can use $counterPost in your modal content
                }
            ?>
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div id="volunteer" class="content container container-fluid">
                            <form method="POST" id="formUpdateUser" class="d-flex flex-column" action="./banco_de_dados/updateuser_php.php">
                                <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12" >
                                    <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">                                               
                                        <label for="rua" class="form-label">Rua</label>
                                        <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" class="form-control" id="rua" name="rua" placeholder="Rua" value="<?php echo $evento[1]['rua'] ?? ''; ?>" required>
                                    </div>
                                    <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                        <label for="numero" class="form-label">Número</label>
                                        <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" class="form-control" id="numero" name="numero" placeholder="Número" value="<?php echo $eventos['numero'] ?? ''; ?>" required>
                                    </div>
                                </div>
                            </form>
                        </div>  
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Fechar</button>
                        <button type="submit" form="formUpdateUser" type="button" class="btn btn-success">Salvar</button>
                    </div>
                </div>
            </div>
        </div>


    </div>
    </div>
</div>
<script>
    
</script>
<?php include('./components/footer.php') ?>
</body>
</html>