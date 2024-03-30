<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer Profile</title>
  <link rel="stylesheet" href="style/volunteer.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./src/components/navbar2.php') ?>


  <section class="banner container">
    <img src="resources/banner3.png" alt="Banner Image">
    
  </section>

  <div class="sub-menu container">
  <div class="row">
      <div class="profile column col-md-3 bg-light">
        <div class="user-details">
            <img src="resources/profile-picture.jpeg" alt="User Avatar">
            <div>
              <h2><strong>Nome do usuário</strong></h2>
              <p>Localização</p>
            </div>
            <div>
              <p><strong>Tipo de usuário: </strong><span>Voluntário</span></p>
            </div>
            <br>
            <p><strong>Sobre</strong></p>
            <p>Eu sou dedicado a retribuir à minha comunidade através do trabalho voluntário. Seja apoiando instituições de caridade locais ou iniciativas ambientais, estou comprometido a causar um impacto positivo na sociedade. Juntos, vamos criar um futuro mais brilhante através do serviço e da compaixão.</p>
            <br>
            <button class="edit-profile-button btn btn-dark">Editar perfil</button>
        </div>
      </div>
      <div class="column col">
        <ul class="text-start">
          <li><h4>Serviço voluntário</h4></li>
        </ul>
        <section class="gallery container">
          <ul>
            <li><img src="resources/agua.jpeg" alt="Image 1"></li>
            <li><img src="resources/food.jpeg" alt="Image 2"></li>
            <li><img src="resources/golden.jpeg" alt="Image 2"></li>
          </ul>
        </section>
      </div>
    </div>
  </div>
<!-- <div class="button-load"> 
    <button class="load-more-button btn btn-dark">Load more</button>
</div> -->

<?php include('./src/components/footer.php') ?>

</body>
</html>



