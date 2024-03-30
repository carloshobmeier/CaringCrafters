<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/home.css">
    <title>Documento</title>
</head>
<body>
    <main class="">
        <section id="sidebar" class="col-3 container">
            <h1>Caring Crafters</h1>
            <div id="filter">
                <input type="text">
                <h3>Filtro</h3>
            </div>
            <div>
            </div>
        </section>
        <section class="col-9"> 
            <nav class="navbar navbar-expand-lg">
                <div></div>
                <div></div>
                <div></div>
                <div></div>
                <img src="" alt="">
            </nav>
            <section id="mainPanel">
                <h3><?php  ?>Resultados</h3>
                <div class="cards">    
                    <?php
                    $numberOfCards = 30;
                    for($i = 1;$i<$numberOfCards;$i++){
                        echo '<div class="card" style="width: 18rem;">
                        <img src="./assets/pexels-tobi-463734.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="">Card title</h5>
                            <p class="">Some quick example text to build on the card title and make up the bulk of the card"s content.</p>
                        </div>
                        </div>';
                    }
                    ?>
                </div>
            </section>
        </section>
    </main>
    <script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>