<!DOCTYPE html>
<?php
session_start();

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
        $dataFundacao = $row['dataFundacao'];
        $horaInicial = $row['horaInicial'];
        $horaFinal = $row['horaFinal'];
        $fotoPerfil = $row['foto'];
        $sobre = $row['sobre'];

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
                <button type="button" class="btn btn-outline-dark mb-4" style="font-size: 14px">Editar Perfil</button>
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
            <div class="py-4 d-flex flex-column row-gap-4" style="width: 45%">
                <div>
                    <h5 class="border-1 border-bottom py-1 mb-3">Postagens</h5>
                    <div class="grid row row-cols-1 row-gap-3 mx-auto">
                        <div class="card p-0 w-100">
                            <div class="card-body p-4">
                                <a href="" class="text-decoration-none fw-medium" style="color: #07857A">Instituição XYZ</a>
                                <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                                <p class="card-text" style="font-size: 15px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam natus ex reiciendis porro. Eligendi inventore sit vero debitis quae accusantium enim libero vel quod. Doloremque nihil vitae hic assumenda...</p>
                            </div>
                        </div>
                        <div class="card p-0 w-100">
                            <div class="card-body p-4">
                                <a href="" class="text-decoration-none fw-medium" style="color: #07857A">Instituição XYZ</a>
                                <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                                <p class="card-text" style="font-size: 15px">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Quaerat quam natus ex reiciendis porro. Eligendi inventore sit vero debitis quae accusantium enim libero vel quod. Doloremque nihil vitae hic assumenda...</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="d-flex justify-content-between align-items-center border-1 border-bottom py-1 mb-3">
                        <h5 class="mb-0">Eventos</h5>
                        <button onclick="location.href='crud_eventos.php';" class="btn btn-success mb-0" style="margin-bottom: 15px;">Gerenciar</button>
                    </div>
                    
                    <div>
                    </div>
                    <div class="grid row row-cols-auto gap-3 row-gap-3 mx-auto">
                        <div class="card p-0" style="width: 250px">
                            <div class="card-body">
                                <a href="" class="text-decoration-none fw-medium text-black">Encontro presencial</a>
                                <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                                <p class="card-text" style="font-size: 15px">Será realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                                <div class="d-flex gap-1 mb-3">
                                    <span class="profile-label">Saúde</span>
                                    <span class="profile-label">Infantil</span>
                                </div>
                                <button type="button" class="out-yellow-button w-100">Ver mais</button>
                            </div>
                        </div>
                        <div class="card p-0" style="width: 250px">
                            <div class="card-body">
                                <a href="" class="text-decoration-none fw-medium text-black">Reunião online</a>
                                <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                                <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                                <div class="d-flex gap-1 mb-3">
                                    <span class="profile-label"">Saúde</span>
                                </div>
                                <button type="button" class="out-yellow-button w-100">Ver mais</button>
                            </div>
                        </div>
                        <div class="card p-0" style="width: 250px">
                            <div class="card-body">
                                <a href="" class="text-decoration-none fw-medium text-black">Comemoração de 1 ano</a>
                                <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                                <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                                <div class="d-flex gap-1 mb-3">
                                    <span class="profile-label">Saúde</span>
                                </div>
                                <button type="button" class="out-yellow-button w-100">Ver mais</button>
                            </div>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <?php include('./components/footer.php') ?>

</body>
</html>