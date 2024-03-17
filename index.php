<!doctype html>
<html lang="en">
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
    <?php include('./src/components/navbar2.php') ?>
    <section class="index-main-banner d-flex">
        <div class="d-flex container">
            <div class="main-banner-content col-6">
                <h5>Nossa missão</h5>
                <h1>Ajudando pessoas e construindo um futuro melhor.</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa, accusantium! Ratione nobis vitae nulla repellendus eos, modi quia sunt fugit molestiae molestias labore esse quisquam iusto exercitationem laborum quos necessitatibus.</p>
                <button type="button" class="btn btn-lg btn-outline-light">Junte-se a gente!</button>
            </div>
            <!-- Fazer imagem ficar responsiva -->
            <img class="mx-auto main-banner-img col-6" src="./resources/help.png">
        </div>
            
        </section>
        <section class="index-categories-banner container">
        <h4 class="text-center" style="color: #efa34c; letter-spacing: 1px">CATEGORIAS</h4>
        <h1 class="text-center" style="color: #343738;">Programas e áreas de atuação</h1>
        <div class="row row-cols mx-auto gap-3" style="margin-top: 40px;">
            <div class="col-sm card border border-0 index-card">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre<span class="material-symbols-outlined">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre<span class="material-symbols-outlined">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre<span class="material-symbols-outlined">arrow_forward_ios</span></a>
                </div>
            </div>
            <div class="col-sm card border border-0 index-card">
                <img src="./resources/usuarios-alt.png" class="index-card-img" alt="...">
                <div class="card-body">
                    <h5 class="card-title text-center" style="color: #343738;">Categoria teste</h5>
                    <p class="card-text text-center" style="color: #8c8c91;">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                    <a href="#" class="index-card-btn">Leia Sobre<span class="material-symbols-outlined">arrow_forward_ios</span></a>
                </div>
            </div>
        </div>
    </section>
    <section class="my-5 faq container d-flex"> 
        <div class="col-6 d-flex flex-column align-items-center justify-content-between">
            <h3 class="font-weight-bold">Frequently Asked Questions</h3>
            <p class="col-10">If you have any other questions or need further assistance, please don't hesitate to contact us. We're here to help make your volunteering experience with CaringCrafters as seamless and rewarding as possible!</p>
        </div>
        <div class="col-6 d-flex justify-content-center">
        <div class="col-10 accordion accordion-flush" id="accordionFlushExample">
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                    How does CaringCrafters work?
                </button>
                </h2>
                <div id="flush-collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	CaringCrafters is a platform that connects volunteers with organizations and businesses in need of support. Volunteers can browse through a variety of opportunities based on their interests, skills, and availability, while organizations can post volunteer opportunities and connect with passionate individuals who want to make a difference</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                    How can I sign up to volunteer with CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Signing up as a volunteer with CaringCrafters is easy! Simply visit our website and click on the "Sign Up" button. You'll be guided through a quick registration process where you can create your profile and start browsing volunteer opportunities right away.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                    What types of volunteer opportunities are available on CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	We offer a wide range of volunteer opportunities to suit diverse interests and skill sets. Whether you're passionate about environmental conservation, community outreach, education, or social justice, you'll find something that aligns with your passions and values on our platform.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                    How do I contact an organization or business about a volunteer opportunity?
                </button>
                </h2>
                <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Once you've found a volunteer opportunity that interests you, simply click on the listing to view more details. From there, you'll find contact information for the organization or business hosting the opportunity. You can reach out to them directly via email or phone to express your interest and ask any questions you may have.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                    Can organizations and businesses post volunteer opportunities on CaringCrafters?
                </button>
                </h2>
                <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	Yes, absolutely! We welcome organizations and businesses of all sizes to post volunteer opportunities on our platform. Whether you're hosting a one-time event, need ongoing support for a project, or are looking for skilled volunteers with specific expertise, we're here to help you find the right volunteers for the job.</div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                    Is there a cost to use CaringCrafters?                
                </button>
                </h2>
                <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                <div class="accordion-body">•	No, there is no cost to use CaringCrafters for volunteers or organizations. Our platform is free to use for everyone, and we're committed to making it as accessible and inclusive as possible.</div>
                </div>
            </div>
            </div>
        </div>

    </section>
    <?php include('./src/components/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>