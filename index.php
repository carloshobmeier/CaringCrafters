<!doctype html>
<html lang="pt-BR">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CaringCrafters</title>
    <link href="./style/index.css" rel="stylesheet">
    <link rel="stylesheet" href="./style/setup.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
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
    <section class="index-main-banner d-flex">
        <div class="d-flex container">
            <div class="main-banner-content col-6">
                <h5>Nossa Missão</h5>
                <h1>Ajudando pessoas a construir um mundo mais humano e igualitário.</h1>
                <p>Nós descobrimos e conectamos instituições emergentes de voluntariado com pessoas colaborativas que desejam participar de programas de voluntariado.</p>
                <a href="signIn.php"><button type="button" class="btn btn-lg btn-outline-light">Junte-se a nós!</button></a>
            </div>
            <!-- Fazer imagem ficar responsiva -->
            <img class="mx-auto main-banner-img" src="./assets/images/help.png">
        </div>
            
        </section>
        <section class="index-categories-banner container">
        <h4 class="text-center" style="color: #efa34c; letter-spacing: 1px">CATEGORIAS</h4>
        <h1 class="text-center" style="color: #343738;">Programas e áreas de ação</h1>
        <div class="row row-cols mx-auto gap-3" style="margin-top: 40px;">
            <div class="col-sm card border border-0 index-card">
                <img src="./assets/images/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Auxílio médico</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Encontre programas para ajudar aqueles que precisam de melhor cuidado médico.</p>
                    <a href="#" class="index-card-btn">Veja mais<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./assets/images/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Auxílio a animais</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Ajude abrigos de animais a cuidade de suas infraestruturas e seus amiguinhos.</p>
                    <a href="#" class="index-card-btn">Veja mais<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./assets/images/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Serviço social</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Junte-se às instituições e ajude pessoas de todos os segmentos da vida dentro da sua comunidade.</p>
                    <a href="#" class="index-card-btn">Veja mais<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./assets/images/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Banco de alimentos</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Junte-se aos bancos de alimentos beneficentes e ajude as pessoas a evitar a fome e a desnutrição.</p>
                    <a href="#" class="index-card-btn">Veja mais<span class="material-symbols-outlined" style="font-size: 14px;">arrow_forward_ios</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 faq container d-grid"> 
        <div class="col-12 d-flex flex-column align-items-center justify-content-between">
            <h4 class="font-weight-bold" style="color: #efa34c; margin-bottom: 30px; letter-spacing: 1px">PERGUNTAS FREQUENTES</h4>
            <p class="col-10">Se você tiver outras perguntas ou precisar de mais assistência, não hesite em nos contatar. Estamos aqui para ajudar a tornar sua experiência de voluntariado com o CaringCrafters o mais tranquila e gratificante possível!</p>
        </div>
        <div class="col-12 d-flex justify-content-center">
        <div class="col-10 accordion accordion-flush" id="accordionFlushExample">
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

    </section>
    <?php include('./components/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>