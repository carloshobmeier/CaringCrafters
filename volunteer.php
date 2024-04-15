
<!DOCTYPE html>
<?php
session_start();
?>

<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Voluntários</title>
  <link rel="stylesheet" href="./style/volunteer.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php 
  if (!isset($_SESSION['id'])) {
    include('./components/navbar_index.php');
  } else {
    include('./components/navbar_logado.php');
  }
  ?>


  <div class="institutions text-center">
    <h1>VOLUNTÁRIOS</h1>
    <p>Bem-vindo ao Hub de Voluntários da CaringCrafters!</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6">

        <p>Junte-se à Comunidade <span>CaringCrafters</span>!</p>

        <p>Você é apaixonado por fazer a diferença? Na <span>CaringCrafters</span>, acreditamos no poder das pessoas se unirem para criar mudanças positivas. Junte-se à nossa comunidade de voluntários e embarque em uma jornada de impacto significativo.</p>

        <h2>Por que ser Voluntário conosco?</h2>
        <ol>
            <li><strong>Oportunidades Diversas</strong>: Explore uma ampla gama de oportunidades de voluntariado abrangendo diversas causas e interesses. Se você é apaixonado por conservação ambiental, justiça social, educação ou trabalho comunitário, temos algo para todos;</li>

            <li><strong>Compromissos Flexíveis</strong>: Entendemos que a vida pode ser corrida. Por isso, oferecemos oportunidades de voluntariado que se encaixam em sua agenda, seja você capaz de dedicar algumas horas por semana ou queira dedicar mais tempo a uma causa que você se importa;</li>

            <li><strong>Combinação Personalizada</strong>: Nos conte sobre suas habilidades, interesses e disponibilidade, e iremos combinar você com oportunidades de voluntariado que estejam alinhadas com suas preferências. Se você está buscando utilizar sua expertise profissional ou aprender novas habilidades, encontraremos o encaixe perfeito para você;</li>

            <li><strong>Engajamento Comunitário</strong>: Junte-se a uma comunidade vibrante de pessoas com ideais semelhantes dedicadas a fazer a diferença. Conecte-se com outros voluntários, compartilhe experiências e colabore em projetos que criam impacto duradouro em nossas comunidades;</li>
        </ol>

        <p>Pronto para fazer a diferença? Inscreva-se hoje e faça parte da comunidade <span>CaringCrafters</span>. Juntos, podemos criar um futuro mais brilhante para todos!</p>

      </div>


      <div class="col-md-6" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/Home.jpeg" alt="" width="90%">
      </div>
    </div>
  </div>

  </div>

  <?php include('./components/footer.php') ?>

</body>
</html>
