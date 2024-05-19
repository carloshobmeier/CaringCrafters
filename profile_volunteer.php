<!DOCTYPE html>
<?php
session_start();

// Check if the session variable 'id' is not set
if (!isset($_SESSION['id'])) {
    // Redirect to login.php
    header("Location: login.php");
    exit(); // Make sure to exit after redirection
}
else{
    include('./banco_de_dados/connectTeste.php');
    $userID = $_SESSION['id'];
    $sql = "SELECT * FROM usuario WHERE id_user = $userID";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {

        $userData = $result->fetch_assoc();

        $nome = $userData['nome'];
        $sobrenome = $userData['sobrenome'];
        $email = $userData['email'];
        $telefone = $userData['telefone'];
        $cep = $userData['cep'];
        $cidade = $userData['cidade'];
        $dataDeNascimento = $userData['dataDeNascimento'];
        $genero = $userData['genero'];
        $estadoCivil = $userData['estadoCivil'];
        $escolaridade = $userData['escolaridade'];
        $nacionalidade = $userData['nacionalidade'];
        $ocupacao = $userData['ocupacao'];
        $experienciaPrevia = $userData['experienciaPrevia'];
        $senha = $userData['senha'];
        $id_user = $userData['id_user'];
        $fotoPerfil = $userData['foto'];

        // Add more fields as needed
    } else {
        // No user found with the provided ID
        echo "No user found with ID: $userID";
    }
    
    // Close database connection
    $conn->close();
}
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/profile.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
    <title><?php echo $nome;?> - Profile Page</title>
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
    <section class="w-100 h-100">
        <div class="w-full">
            <div class="profile-banner" style="background-image: url('./assets/images/agua.jpeg')" alt="">
                <div class="banner-overlay"></div>
            </div>
        </div>
        <div class="d-flex justify-content-center gap-5 mb-5 profile-layout">
            <div class="position-relative p-4 d-flex flex-column rounded-4" style="width: 250px; background: #F0F0F0; top: -90px; height: fit-content">
                <img class="mx-auto rounded-circle mb-2" src="data:image/png;base64,<?php echo base64_encode($fotoPerfil) ?>" style="width: 38%" alt="">
                <div class="text-center mb-3">
                    <h5 class="mb-0"><?php echo $nome;?> <?php echo $sobrenome;?></h5>
                    <p><?php echo $cidade;?></p>
                    <p class="mb-0"><strong>Escolaridade:</strong> <?php echo $escolaridade;?></p>
                    <p class="mb-0"><strong>Ocupação:</strong> <?php echo $ocupacao;?></p>
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
                                    <form method="POST" id="formUpdateUser" class="d-flex flex-column" action="./banco_de_dados/updateuser_php.php" enctype="multipart/form-data">
                                                <label for=""></label>
                                                <img class="mx-auto rounded-circle mb-2" src="data:image/png;base64,<?php echo base64_encode($fotoPerfil) ?>" name="imagemSelecionada" alt="Foto de perfil" style="width: 25%">
                                                <input type="hidden" name="MAX_FILE_SIZE" value="16777215" />
                                                <input type="file" id="Imagem" name="Imagem" accept="imagem/*" class="col-4 mx-auto mt-2 mb-4" onchange="validaImagem(this);"></label>
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12" >
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="name"><strong>Nome:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="name" name="nameU" value="<?php echo $nome;?>">
                                                <div class="name col-10"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="sobrenome"><strong>Sobrenome:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="sobrenomeU" name="sobrenomeU" value="<?php echo $sobrenome;?>">
                                                <div class="surname col-10"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="email"><strong>E-mail:<span class="requir"></span></strong></label>
                                                <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="email" name="emailU" value="<?php echo $email;?>">
                                                <div class="email"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="phonenumber"><strong>Número de telefone:<span class="requir"></span></strong></label>
                                                <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="phonenumber" name="phonenumberU" value="<?php echo $telefone;?>">
                                                <div class="phonenumber"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="cep"><strong>CEP:</strong></label>
                                                <input data-type="cep" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="number" id="cep" name="cepU" value="<?php echo $cep;?>">
                                                <div class="cep col-10"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="city"><strong>Cidade:</strong></label>
                                                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="city" name="cityU" value="<?php echo $cidade;?>">
                                                <div class="city"></div>
                                            </div>
                                        </div>
                                        
                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="birthdate"><strong>Data de nascimento:<span class="requir"></span></strong></label>
                                                <input data-type="dateOfBirth" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="birthdate" name="birthdateU" value="<?php echo $dataDeNascimento;?>">
                                                <div class="birthdate"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="gender"><strong>Gênero:</strong></label>
                                                <select class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" id="gender" name="genderU">
                                                <option value="Masculino">Masculino</option>
                                                <option value="Feminino">Feminino</option>
                                                <option value="Outro">Outro</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="maritalstatus"><strong>Estado civil:</strong></label>
                                                <select class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" id="maritalstatus" name="martialstatusU">
                                                    <option value="">--Caso deseje alterar, selecione uma opção--</option>
                                                <option value="Solteiro(a)">Solteiro(a)</option>
                                                <option value="Casado(a)">Casado(a)</option>
                                                <option value="Divorciado(a)">Divorciado(a)</option>
                                                <option value="Viúvo(a)">Viúvo(a)</option>
                                                </select>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="education"><strong>Educação:</strong></label>
                                                <select class="col-12" id="education" name="educationU">
                                                <option value="Ensino Médio">Ensino médio</option>
                                                <option value="Faculdade">Faculdade</option>
                                                <option value="Especialização">Especialização</option>
                                                <option value="Mestrado">Mestrado</option>
                                                <option value="Doutorado">Doutorado</option>
                                                </select>
                                            </div>
                                        </div>

                                        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="nationality"><strong>Nacionalidade:<span class="requir">*</span></strong></label>
                                                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="nationality" name="nationalityU" value="<?php echo $nacionalidade;?>">
                                                <div class="nationality"></div>
                                            </div>
                                            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                                                <label for="occupation"><strong>Ocupação:<span class="requir"></span></strong></label>
                                                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="occupation" name="occupationU" value="<?php echo $ocupacao;?>">
                                                <div class="occupation"></div>
                                            </div>
                                        </div>
                                        <div class="d-flex flex-row col-12">
                                            <div class="d-flex flex-column col-12">
                                                <label for="volunteering_experience"><strong>Experiência como voluntário:</strong></label>
                                                <textarea class="form-control" id="volunteering_experience" rows="4" name="volunteering_experienceU" value="<?php echo $experienciaPrevia;?>"></textarea>
                                            </div>
                                        </div>

                                        <label for="pass1"><strong>Alterar senha:<span class="requir"></span></strong></label>
                                        <input data-type="password" type="password" id="pass1" name="pass1U" >
                                        <div class="pass1"></div>

                                        <label for="pass2"><strong>Confirme a senha nova:<span class="requir"></span></strong></label>
                                        <input data-type="repeatPassword" type="password" id="pass2" name="pass2U">
                                        <div class="pass2"></div>                                     
                                    </form>
                                </div>  
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Voltar</button>
                                <button type="submit" form="formUpdateUser" type="button" class="btn btn-success">Salvar</button>
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
            <div class="py-4" style="width: 55%; max-width: 835px">
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
    <script>
        document.getElementById('gender').value = '<?php echo $genero;?>';
        document.getElementById('maritalstatus').value = '<?php echo $estadoCivil;?>';
        document.getElementById('education').value = '<?php echo $escolaridade;?>';
    </script>
    <script src="./assets/scripts/updateUser.js"></script>

</body>
</html>