
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
  <title>Instituições</title>
  <link rel="stylesheet" href="./style/institution.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./components/navbar_logado.php') ?>


  <div class="institutions text-center">
    <h1>INSTITUIÇÕES</h1>
    <p>Bem-vindo ao Hub de Organizações da CaringCrafters!</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6">

        <p>Você é uma organização <span>sem fins lucrativos</span>, instituição ou grupo comunitário em busca de voluntários apaixonados para apoiar suas iniciativas? A CaringCrafters oferece uma plataforma para organizações como a sua se conectarem com indivíduos dedicados ansiosos para fazer a diferença.</p>

        <h2>Por que se Associar Conosco?</h2>
        <ol>
            <li><strong>Acesso a uma Diversificada Base de Voluntários</strong>: Aproveite nossa rede de voluntários que estão ansiosos para dedicar seu tempo, habilidades e experiências para apoiar a missão de sua organização. Se você precisa de voluntários para um evento único, projetos contínuos ou tarefas especializadas, temos uma base diversificada de indivíduos prontos para ajudar;</li>

            <li><strong>Combinação de Voluntários Personalizada</strong>: Nos conte sobre as necessidades de sua organização, e iremos combinar você com voluntários que possuam as habilidades e interesses necessários para contribuir de forma eficaz. Seja necessária experiência específica, habilidades de idioma ou disponibilidade, encontraremos a combinação certa para sua organização;</li>

            <li><strong>Opções de Engajamento Flexíveis</strong>: Se você precisa de voluntários para projetos de curto prazo, compromissos de longo prazo, oportunidades virtuais ou eventos presenciais, oferecemos opções de engajamento flexíveis para atender às necessidades de sua organização;</li>

            <li><strong>Colaboração Comunitária</strong>: Junte-se a uma comunidade de organizações comprometidas em impulsionar mudanças positivas. Conecte-se com outras organizações sem fins lucrativos, empresas e grupos comunitários para compartilhar recursos, colaborar em projetos e ampliar seu impacto;</li>
        </ol>

        <p>Pronto para encontrar os voluntários que sua organização precisa para prosperar? Inscreva-se hoje e desbloqueie o poder da colaboração com a CaringCrafters! Juntos, podemos criar uma comunidade mais forte e vibrante para todos.</p>


      </div>
   
      <div class="col-md-6" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/health3.jpeg" alt="" width="90%">
      </div>
    </div>
  </div>

  </div>

  <?php include('./components/footer.php') ?>

</body>
</html>












