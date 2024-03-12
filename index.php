<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CaringCrafters</title>
    <link href="./style/index.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <?php include('./src/components/navbar.php') ?>
    <section class="index-main-banner d-flex">
        <div class="main-banner-content">
            <h5>Nossa missão</h5>
            <h1>Ajudando pessoas e construindo um futuro melhor.</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, accusantium! Ratione nobis vitae nulla repellendus eos, modi quia sunt fugit molestiae molestias labore esse quisquam iusto exercitationem laborum quos necessitatibus.</p>
            <button type="button" class="btn btn-lg btn-outline-light">Junte-se a gente!</button>
        </div>
        <!-- Fazer imagem ficar responsiva -->
        <img class="mx-auto main-banner-img" src="./resources/help.png">
    </section>
    <section class="index-categories-banner">
        <h4 class="text-center" style="color: #efa34c; letter-spacing: 1px">CATEGORIAS</h4>
        <h1 class="text-center" style="color: #343738;">Programas e áreas de atuação</h1>
        <div class="d-flex justify-content-center gap-5" style="margin-top: 40px;">
            <div class="card border border-0 index-card" style="width: 18rem;">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre</a>
                </div>
            </div>
            <div class="card border border-0 index-card" style="width: 18rem;">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre</a>
                </div>
            </div>
            <div class="card border border-0 index-card" style="width: 18rem;">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre</a>
                </div>
            </div>
            <div class="card border border-0 index-card" style="width: 18rem;">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre</a>
                </div>
            </div>
        </div>
    </section>
    <?php include('./src/components/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>