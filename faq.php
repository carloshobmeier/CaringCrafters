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
  <title>Perguntas Frequentes</title>
  <link rel="stylesheet" href="./style/faq.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./components/navbar_logado.php') ?>


  <div class="faq container text-center">
    <h1 style="margin-top: 30px;">Perguntas Frequentes (FAQ)</h1>
    <p>Se você tiver outras perguntas ou precisar de mais assistência, não hesite em nos contatar. Estamos aqui para ajudar a tornar sua experiência de voluntariado com o CaringCrafters o mais tranquila e gratificante possível!</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6 esquerda">

      <div class="d-flex justify-content-center">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    Como o CaringCrafters funciona?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	CaringCrafters é uma plataforma que conecta voluntários a instituições que precisam de apoio. Os voluntários podem navegar por uma variada gama de oportunidades com base em seus interesses, habilidades e disponibilidade, enquanto as organizações podem publicar oportunidades de voluntariado e conectar-se com indivíduos apaixonados que querem fazer a diferença.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    Como posso me inscrever para voluntariar com o CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Se inscrever como voluntário no CaringCrafters é fácil! Basta visitar nosso site e clicar no botão "Inscrever-se". Você será guiado por um rápido processo de registro onde poderá criar seu perfil e começar a navegar nas oportunidades de voluntariado imediatamente.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    Que tipo de oportunidades de voluntariado estão disponíveis no CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Nós divulgamos uma ampla variedade de oportunidades de voluntariado para atender a diversos interesses e conjuntos de habilidades. Se você é apaixonado por conservação ambiental, alcance comunitário, educação ou justiça social, encontrará algo que se alinhe com suas paixões e valores em nossa plataforma.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    Como eu contato uma instituição a respeito de uma oportunidade de voluntariado?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Assim que você encontrar uma oportunidade de voluntariado que lhe interesse, basta clicar no anúncio para ver mais detalhes. A partir daí, você encontrará informações de contato da organização ou empresa que está oferecendo a oportunidade. Você pode entrar em contato diretamente com eles por e-mail ou telefone para expressar seu interesse e fazer quaisquer perguntas que possa ter.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Instituições podem postar oportunidades de voluntariado no CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Sim, com certeza! Nós damos as boas-vindas a organizações e empresas de todos os tamanhos para publicar oportunidades de voluntariado em nossa plataforma. Seja para hospedar um evento único, necessidade de apoio contínuo em um projeto ou se estiver em busca de voluntários qualificados com expertise específica, estamos aqui para ajudá-los a encontrar os voluntários certos para o trabalho.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Há algum custo para utilizar o CaringCrafters?                
                </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Não, não há custo para usar o CaringCrafters. Tanto para voluntários quanto para instituições. Nossa plataforma é gratuita para todos, e estamos comprometidos em torná-la o quanto mais acessível e inclusiva possível.</div>
                </div>
            </div>
            </div>
        </div>
      </div>
   

      <div class="col-md-6 direita" style="margin-top:10px; margin-bottom:10px">
        <img src="./assets/images/meeting.jpeg" alt="" width="100%">
      </div>
    </div>
  </div>

  </div>

  <?php include('./components/footer.php') ?>

</body>
</html>
