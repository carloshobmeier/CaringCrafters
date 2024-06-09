<!DOCTYPE html>
<?php
include('./components/controle_expiracao.php');

// Check if the session variable 'id' is not set
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
else{
    include('./banco_de_dados/connectTeste.php');
    $id = $_SESSION['id'];
    $sql = "SELECT * FROM instituicao WHERE id_Inst = $id";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        $row = $result->fetch_assoc();

        $nomeFantasia = $row['nomeFantasia'];
        $nomeAdm = $row['nomeAdministrador'];
        $email = $row['email'];
        $telefone = $row['telefone'];
        $cep = $row['cep'];
        $cidade = $row['cidade'];
        $razaoSocial = $row['razaoSocial'];
        $dataFundacao = $row['dataFundacao'];
        $horaInicial = $row['horaInicial'];
        $horaFinal = $row['horaFinal'];
        $fotoPerfil = $row['foto'];
        $sobre = $row['sobre'];
        $capitalSocial = $row['capitalSocial'];
        $cnpj = $row['cnpj'];

    } else {
        // No user found with the provided ID
        echo "No user found with ID: $id";
    }
    
    // Close database connection
    $conn->close();
}
?>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>
<body>
    <?php 
    if (!isset($_SESSION['id'])) {
        include('./components/navbar_index.php');
    } else {
        if($_SESSION['tipoCadastro'] === 'usuario') {
            include("./components/navbar_logado_usuario.php");
        } elseif ($_SESSION['tipoCadastro'] === 'instituicao') {
            include("./components/navbar_logado_instituicao.php");
        }
    }
    ?>
    <section class="w-100 h-100">
        <div class="w-full">
            <div class="profile-banner" style="background-image: url('./assets/images/pequeno_principe.jpg')" alt="">
                <div class="banner-overlay"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-5 mb-5 profile-layout">
            <div class="position-relative p-4 d-flex flex-column rounded-4" style="width: 250px; background: #F0F0F0; top: -90px; height: fit-content">
                <img class="mx-auto rounded-circle mb-2" src="data:image/png;base64,<?php echo base64_encode($fotoPerfil) ?>" style="width: 38%" alt="">
                <div class="text-center mb-3">
                    <h5 class="mb-0"><?php echo($nomeFantasia) ?></h5>
                    <p><?php echo($cidade) ?></p>
                    <p class="mb-0"><strong>Administrador:</strong> <?php echo $nomeAdm;?></p>
                    <p class="mb-0"><strong>Funcionamento:</strong> <?php echo substr($horaInicial, 0, 5);?>h : <?php echo substr($horaFinal, 0, 5);?>h</p>
                    <p class="mb-0"><strong>Fundação em:</strong>
                        <?php 
                        $date = date_create($dataFundacao); 
                        $formattedDate = date_format($date, 'd-m-Y'); 
                        echo  str_replace("-", "/", $formattedDate)
                        ?>
                    </p>
                </div>
                <button type="button" class="btn btn-success mb-4" data-bs-toggle="modal" data-bs-target="#editInstitutionModal">Editar Perfil</button>


                <div class="modal fade" id="editInstitutionModal" tabindex="-1" aria-labelledby="editInstitutionModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="editInstitutionModalLabel">Editar Perfil da Instituição</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <form method="POST" action="./banco_de_dados/updateInstitution_php.php" enctype="multipart/form-data">
                                    <div class="mb-3">
                                        <label for="institutionName" class="form-label">Nome Fantasia</label>
                                        <input type="text" class="form-control" id="institutionName" style="width: 700px;" name="nomeFantasia" value="<?php echo $nomeFantasia; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="adminName" class="form-label">Nome do Administrador</label>
                                        <input type="text" class="form-control" id="adminName" style="width: 700px;" name="nomeAdministrador" value="<?php echo $nomeAdm; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="email" class="form-label">E-mail</label>
                                        <input type="email" class="form-control" id="email" name="email" style="width: 700px;" value="<?php echo $email; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="phone" class="form-label">Telefone</label>
                                        <input type="text" class="form-control" id="phone" name="telefone" style="width: 700px;" value="<?php echo $telefone; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="city" class="form-label">Cidade</label>
                                        <input type="text" class="form-control" id="city" name="cidade" style="width: 700px;" value="<?php echo $cidade; ?>">
                                    </div>
                                    <div class="mb-3">
                                        <label for="about" class="form-label">Sobre a Instituição</label>
                                        <textarea class="form-control" id="about" name="sobre" rows="3" style="width: 700px;"><?php echo $sobre; ?></textarea>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                                        <button type="submit" class="btn btn-success">Salvar</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="text-start">
                    <h5>Sobre</h5>
                    <p class="fw-normal" style="font-size: 15px">
                        <?php 
                            if (strlen($sobre) > 0) {
                                echo $sobre;
                            } else {
                                echo "Nenhuma informação disponível.";
                            }    
                        ?>
                    </p>
                </div>
            </div>
            <div class="py-4 d-flex flex-column row-gap-4 mb-5" style="width: 50%">
                <div>
                    <div class="d-flex justify-content-between align-items-center border-1 border-bottom py-1 mb-3">
                        <h5 class="mb-0">Eventos</h5>
                        <button onclick="location.href='crud_eventos.php';" class="btn btn-success mb-0" style="margin-bottom: 15px;">Gerenciar</button>
                    </div>
                    
                    <div>
                    </div>
                    <div class="grid row row-cols-auto gap-3 row-gap-3 mx-auto">
                        <?php
                            include('./banco_de_dados/connectTeste.php');
                            $sqlEvents = "SELECT * FROM evento WHERE fk_Instituicao_id_Inst = $id";
                            $resultEvents = $conn->query($sqlEvents);
                            if ($resultEvents->num_rows > 0) {
                                while($rowEvents = $resultEvents->fetch_assoc()) {
                                    ?>
                                        <div class="card p-0" style="width: 31%">
                                            <div class="card-body">
                                                <div class="text-decoration-none fw-medium text-black fs-4"><?php echo $rowEvents['titulo'] ?></div>
                                                <p class="card-text text-body-secondary" style="font-size: 12px">
                                                    <?php
                                                        $dataEvento = $rowEvents['dataEvento'];
                                                        $date = date_create($dataEvento); 
                                                        $formattedDate = date_format($date, 'd-m-Y'); 
                                                        echo str_replace("-", "/", $formattedDate);
                                                    ?>
                                                </p>
                                                <p class="card-text fw-semibold mb-0" style="font-size: 15px"><?php echo $rowEvents['rua'] ?>, <?php echo $rowEvents['numero'] ?> - <?php echo $rowEvents['cidade'] ?></p>
                                                <p class="card-text mt-0 text-body-secondary" style="font-size: 15px">Período: <?php echo substr($rowEvents['horaInicial'], 0, 5);?>h : <?php echo substr($rowEvents['horaFinal'], 0, 5);?>h</p>
                                                <p class="card-text" style="font-size: 15px"><?php echo $rowEvents['conteudo'] ?></p>
                                                <button onclick="location.href='crud_eventos.php';" type="button" class="out-yellow-button w-100">Ver mais</button>
                                            </div>
                                        </div>

                                    <?php
                                }
                            } else {
                                echo "Não há eventos cadastrados...";
                            }
                        ?>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <?php include('./components/footer.php') ?>

    <style>
        label {
            margin-left: 15px;
            margin-right: 15px;
        }
        input {
            margin-left: 15px;
            margin-right: 15px;
        }

        textarea {
            margin-left: 15px;
            margin-right: 15px;
        }
    </style>

</body>
</html>