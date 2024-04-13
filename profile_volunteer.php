<!DOCTYPE html>
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
    <?php include('./components/navbar_logado.php') ?>
    <section class="w-100 h-100">
        <div class="w-full">
            <div class="profile-banner" style="background-image: url('./assets/images/agua.jpeg')" alt="">
                <div class="banner-overlay"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-5 mb-5 profile-layout">
            <div class="position-relative p-4 d-flex flex-column rounded-4" style="width: 250px; background: #F0F0F0; top: -90px; height: fit-content">
                <img class="mx-auto rounded-circle mb-2" src="./assets/images/agua.jpeg" style="width: 38%" alt="">
                <div class="text-center mb-3">
                    <h5 class="mb-0">bptiago</h5>
                    <p>Curitiba, Paraná</p>
                </div>
                <button type="button" class="btn btn-outline-dark mb-4" style="font-size: 14px" data-bs-toggle="modal" data-bs-target="#exampleModal">Editar Perfil</button>
                
                <!-- MODAL DE EDIÇÃO PERFIL -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h1 class="modal-title fs-5" id="exampleModalLabel">Editar Perfil</h1>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <div id="volunteer" class="content container container-fluid">
                                    <form method="POST" class="d-flex flex-column" action="">
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="name"><strong>Nome:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="name" name="nameU">
                                                <div class="name"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="sobrenome"><strong>Sobrenome:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="sobrenome" name="sobrenomeU">
                                                <div class="name"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="email"><strong>Informe seu e-mail:<span class="requir"></span></strong></label>
                                                <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="email" name="emailU">
                                                <div class="email"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="phonenumber"><strong>Informe seu número de telefone:<span class="requir"></span></strong></label>
                                                <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="phonenumber" name="phonenumberU">
                                                <div class="phonenumber"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="birthdate"><strong>Informe sua data de nascimento:<span class="requir"></span></strong></label>
                                                <input data-type="dateOfBirth" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="birthdate" name="birthdateU">
                                                <div class="birthdate"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="gender"><strong>Informe seu gênero:</strong></label>
                                                <select class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" id="gender" name="genderU">
                                                <option value="male">Masculino</option>
                                                <option value="female">Feminino</option>
                                                <option value="other">Outro</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="maritalstatus"><strong>Informe seu estado civil:</strong></label>
                                                <select class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" id="maritalstatus" name="martialstatusU">
                                                <option value="single">Solteiro(a)</option>
                                                <option value="married">Casado(a)</option>
                                                <option value="divorced">Divorciado(a)</option>
                                                <option value="widowed">Viúvo(a)</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="education"><strong>Informe seu nível de educação:</strong></label>
                                                <select class="col-12" id="education" name="educationU">
                                                <option value="highschool">Ensino médio</option>
                                                <option value="college">Faculdade</option>
                                                <option value="bachelor">Especialização</option>
                                                <option value="master">Mestrado</option>
                                                <option value="phd">Doutorado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <!-- <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="nationality"><strong>Informe sua nacionalidade:<span class="requir">*</span></strong></label>
                                                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="nationality" name="nationalityU">
                                                <div class="nationality"></div>
                                            </div> -->
                                            <!-- <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="occupation"><strong>Informe sua ocupação:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-12" type="text" id="occupation" name="occupationU">
                                                <div class="occupation"></div>
                                            </div> -->
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="occupation"><strong>Ocupação:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="occupation" name="occupationU">
                                                <div class="name"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row col-12">
                                            <div class="d-flex flex-column col-12">
                                                <label for="volunteering_experience"><strong>Experiência como voluntário:</strong></label>
                                                <textarea class="form-control" id="volunteering_experience" rows="4" name="volunteering_experienceU"></textarea>
                                            </div>
                                        </div>
                                        <!-- <div class="d-flex flex-row col-12">
                                            <div class="d-flex flex-column col-6">
                                                <label for="areas_of_interest"><strong>Áreas de interesse:</strong></label>
                                                
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" id="interest2" value="environment" name="environmentarea">
                                                    <label class="form-check-label" for="interest2">Meio Ambiente</label>
                                                </div>
                                                Adicionar mais depois
                                            </div>
                                        </div> -->

                                        <label for="pass1"><strong>Alterar senha:<span class="requir"></span></strong></label>
                                        <input data-type="password" type="password" id="pass1" name="pass1U">
                                        <div class="pass1"></div>

                                        <label for="pass2"><strong>Confirme a senha nova:<span class="requir"></span></strong></label>
                                        <input data-type="repeatPassword" type="password" id="pass2" name="pass2U">
                                        <div class="pass2"></div>

                                        <!-- <input class="submit" type="submit" value="Submit" name="submitU"> -->
                                    </form>
                                </div>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="button" class="btn btn-primary">Save changes</button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- MODAL TERMINA AQUI -->
                
                <div class="text-start">
                    <h5>Sobre</h5>
                    <p class="fw-normal" style="font-size: 15px">Lorem ipsum dolor sit amet consectetur adipisicing elit. Soluta delectus odio rerum? Eveniet laborum maiores, ipsa quasi qui quibusdam asperiores, in id saepe, expedita nesciunt amet enim neque voluptates facilis.</p>
                </div>
            </div>
            <div class="py-4" style="width: 45%">
                <h5 class="border-1 border-bottom py-1 mb-3">Colaborações</h5>
                <div class="grid row row-cols-auto gap-3 row-gap-3 mx-auto">
                    <div class="card p-0" style="width: 250px">
                        <div class="card-body">
                            <a href="" class="text=decoration-underline fw-medium" style="color: #07857A">Instituição XYZ</a>
                            <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                            <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                            <div class="d-flex gap-1">
                                <span class="py-0 px-2 bg-black rounded-pill text-white" style="font-size: 12px;">Saúde</span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0" style="width: 250px">
                        <div class="card-body">
                            <a href="" class="text=decoration-underline fw-medium" style="color: #07857A">Instituição XYZ</a>
                            <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                            <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                            <div class="d-flex gap-1">
                                <span class="py-0 px-2 bg-black rounded-pill text-white" style="font-size: 12px;">Saúde</span>
                                <span class="py-0 px-2 bg-black rounded-pill text-white" style="font-size: 12px;">Infantil</span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0" style="width: 250px">
                        <div class="card-body">
                            <a href="" class="text=decoration-underline fw-medium" style="color: #07857A">Instituição XYZ</a>
                            <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                            <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                            <div class="d-flex gap-1">
                                <span class="py-0 px-2 bg-black rounded-pill text-white" style="font-size: 12px;">Saúde</span>
                            </div>
                        </div>
                    </div>
                    <div class="card p-0" style="width: 250px">
                        <div class="card-body">
                            <a href="" class="text=decoration-underline fw-medium" style="color: #07857A">Instituição XYZ</a>
                            <p class="card-text text-body-secondary" style="font-size: 12px">20/06/2023</p>
                            <p class="card-text" style="font-size: 15px">Foi realizada uma atividade ao ar livre com crianças de um hospital infantil.</p>
                            <div class="d-flex gap-1">
                                <span class="py-0 px-2 bg-black rounded-pill text-white" style="font-size: 12px;">Saúde</span>
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