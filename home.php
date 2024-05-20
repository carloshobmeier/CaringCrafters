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
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/home.css">
    <title>Página Inicial</title>
</head>
<body>
    <main >
    <?php 
        if (!isset($_SESSION['id'])) {
            include('./components/navbar_index.php');
        } else {
            if($_SESSION['tipoCadastro'] === 'usuario') {
                include("./components/navbar_logado_usuario.php");
            } elseif ($_SESSION['tipoCadastro'] === 'instituicao') {
                include("./components/navbar_logado_instituicao.php");
            } elseif ($_SESSION['tipoCadastro'] === 'admin') {
                include("./components/navbar_logado_admin.php");
            }
        }
        ?>

            <section>
                <div class="mainImage container text-center">
                        <h2>Junte-se hoje ao Caring Crafters e nossa jornada de bondade</h2>
                        <h3>Conecte-se com instituições que precisam de suporte!</h3>
                </div>
            </section >
            <section class="container suggested">
                <h4>Explore causas de valor</h4>
                <div class="suggestedImages d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                    <img  class="col-3" src="./assets/images/food.jpeg" alt="">
                    <div class="imageDuo" class="col-3">
                        <img class="col-6" src="./assets/images/agua.jpeg" alt="">
                        <img class="col-6" src="./assets/images/pexels-tobi-463734.jpg" alt="">
                    </div>
                    <img class="col-3" src="./assets/images/golden.jpeg" alt="">
                    <div class="imageDuo" class="col-3">
                        <img class="col-6" src="./assets/images/uniao2.jpeg" alt="">
                        <img class="col-6" src="./assets/images/tree.jpeg" alt="">
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide d-lg-none d-xl-none d-md-none" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="./assets/images/uniao2.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/images/tree.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./assets/images/agua.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Anterior</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Próximo</span>
                </a>
                </div>
            </section> 
            <section class="sectionCards container col-12">
                <h4>Instituições mais bem avaliadas para procurar</h4>
                <div class="suggestedCards col-12 d-flex flex-lg-row flex-md-row flex-sm-column flex-column" >
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/images/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Título</h5>
                            <h6>Cidade</h6>
                        </div>
                        <div>
                            <h4 >Contato para detalhes</h4>
                        </div>
                    </div> 
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/images/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Título</h5>
                            <h6>Cidade</h6>
                        </div>
                        <div>
                            <h4 >Contato para detalhes</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/images/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Título</h5>
                            <h6>Cidade</h6>
                        </div>
                        <div>
                            <h4 >Contato para detalhes</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/images/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Título</h5>
                            <h6>Cidade</h6>
                        </div>
                        <div>
                            <h4 >Contato para detalhes</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/images/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Título</h5>
                            <h6>Cidade</h6>
                        </div>
                        <div>
                            <h4 >Contato para detalhes</h4>
                        </div>
                    </div>
                </div>
            </section>
        </main>
        <?php include('./components/footer.php') ?>
    <!--<script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>