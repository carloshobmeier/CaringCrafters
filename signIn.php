<?php
  #include_once('./banco_de_dados/signIn-validate.php');
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registre-se</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style/signIn.css">
    <link rel="stylesheet" href="./style/setup.css">
</head>
<body id="body">
      <div class="signin pt-5">
        <h1>Registre-se</h1>
      </div>

      <div class="radioButtons" id="radioButtons">
        <input type="radio" id="volunteer_radio" name="user_type" value="volunteer" onclick="toggleForm('volunteer')">
        <label for="volunteer_radio">
          <div class="card container justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            person_raised_hand
            </span>
            <h2 class="card-title">Voluntário</h2>
        </div>
        </label>
        <input type="radio" id="institution_radio" name="user_type" value="institution" onclick="toggleForm('institution')">
        <label for="institution_radio">
          <div class="card container d-flex flex-column justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            family_home
            </span>
            <h2 class="card-title">Instituição</h2>
          </div></label>
      </div>

      <div id="volunteer" class="d-none content container container-fluid">
        <form method="POST" class="d-flex flex-column" action="./banco_de_dados/signIn-validate.php">
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="name"><strong>Informe seu nome completo:<span class="requir">*</span></strong></label>
              <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="name" name="nameU">
              <div class="name"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="username"><strong>Informe seu CPF:<span class="requir">*</span></strong></label>
              <input data-type="cpf" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="cpf" name="cpfU">
              <div class="cpf"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="email"><strong>Informe seu e-mail:<span class="requir">*</span></strong></label>
              <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="email" name="emailU">
              <div class="email"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="phonenumber"><strong>Informe seu número de telefone:<span class="requir">*</span></strong></label>
              <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="phonenumber" name="phonenumberU">
              <div class="phonenumber"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="cep"><strong>Informe seu CEP:<span class="requir">*</span></strong></label>
              <input data-type="cep" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="number" id="cep" name="cepU">
              <div class="cep"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="city"><strong>Informe sua cidade:<span class="requir">*</span></strong></label>
              <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="city" name="cityU">
              <div class="city"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="birthdate"><strong>Informe sua data de nascimento:<span class="requir">*</span></strong></label>
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
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="nationality"><strong>Informe sua nacionalidade:<span class="requir">*</span></strong></label>
              <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="nationality" name="nationalityU">
              <div class="nationality"></div>
            </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="occupation"><strong>Informe sua ocupação:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-12" type="text" id="occupation" name="occupationU">
                <div class="occupation"></div>
              </div>
            </div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-12">
                <label for="volunteering_experience"><strong>Você tem alguma experiência prévia com voluntariado?</strong></label>
                <textarea class="form-control" id="volunteering_experience" rows="4" name="volunteering_experienceU"></textarea>
              </div>
            </div>
            <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-6">
              <label for="areas_of_interest"><strong>Áreas de interesse:</strong></label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest1" value="education" name="educationarea">
                <label class="form-check-label" for="interest1">Educação</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest2" value="environment" name="environmentarea">
                <label class="form-check-label" for="interest2">Meio Ambiente</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest3" value="healthcare" name="healtharea">
                <label class="form-check-label" for="interest3">Saúde</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest4" value="healthcare" name="animalarea">
                <label class="form-check-label" for="interest4">Animais</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest5" value="healthcare" name="elderarea">
                <label class="form-check-label" for="interest5">Idosos</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest6" value="healthcare" name="childrenarea">
                <label class="form-check-label" for="interest6">Crianças</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest7" value="healthcare" name="foodarea">
                <label class="form-check-label" for="interest7">Alimentação</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest8" value="healthcare" name="sportsarea">
                <label class="form-check-label" for="interest8">Esporte e Recreação</label>
              </div>
              <!-- Adicionar mais depois -->
            </div>
          </div>



            <label for="pass1"><strong>Crie uma senha:<span class="requir">*</span></strong></label>
            <input data-type="password" type="password" id="pass1" name="pass1U">
            <div class="pass1"></div>
            <label for="pass2"><strong>Confirme sua senha:<span class="requir">*</span></strong></label>
            <input data-type="repeatPassword" type="password" id="pass2" name="pass2U">
            <div class="pass2"></div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Você aceita os termos e condições?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms">
                  <label class="form-check-label" for="accept_terms">Sim, aceito.</label>
                </div>
              </div>
            </div>
            <input class="submit" type="submit" value="Submit" name="submitU">

        </form>
      </div>

      <div id="institution" class="d-none content container container-fluid">
    <form class="d-flex flex-column" action="home.php">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_email"><strong>Informe seu e-mail:<span class="requir">*</span></strong></label>
                <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="institution_email">
                <div class="institution_email"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_phonenumber"><strong>Informe seu telefone:<span class="requir">*</span></strong></label>
                <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_phonenumber">
                <div class="institution_phonenumber"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_cep"><strong>Informe seu CEP:<span class="requir">*</span></strong></label>
                <input data-type="cep" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="number" id="institution_cep">
                <div class="institution_cep"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_city"><strong>Informe sua cidade:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_city">
                <div class="institution_city"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_social_reasoning"><strong>Razão Social:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_social_reasoning">
                <div class="institution_social_reasoning"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_fantasy_name"><strong>Nome Fantasia:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_fantasy_name">
                <div class="institution_fantasy_name"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
                <label for="institution_cnpj"><strong>CNPJ:<span class="requir">*</span></strong></label>
                <input data-type="cnpj" class="col-xl-12 co2-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_cnpj">
                <div class="institution_cnpj"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="founding_date"><strong>Data de fundação:<span class="requir">*</span></strong></label>
                <input data-type="date" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="founding_date">
                <div class="founding_date"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="social_capital"><strong>Capital Social:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="social_capital">
                <div class="social_capital"></div>
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="administrator_name"><strong>Nome do administrador:<span class="requir">*</span></strong></label>
                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="administrator_name">
                <div class="administrator_name"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="working_hours"><strong>Horário de funcionamento:</strong></label>
                <input class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="working_hours">
            </div>
        </div>
        <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-12">
                <label for="volunteering_areas"><strong>Áreas de atuação:</strong></label>

                <!-- deixar as mesmas que no dos voluntários -->
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="teaching" id="volunteering_area_teaching">
                    <label class="form-check-label" for="volunteering_area_teaching">Educação</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="mentoring" id="volunteering_area_mentoring">
                    <label class="form-check-label" for="volunteering_area_mentoring">Mentoria</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="counseling" id="volunteering_area_counseling">
                    <label class="form-check-label" for="volunteering_area_counseling">Aconselhamento</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="administration" id="volunteering_area_administration">
                    <label class="form-check-label" for="volunteering_area_administration">Administração</label>
                </div>
                <!-- Add more checkboxes as needed -->
            </div>
        </div>
            <label for="pass3"><strong>Crie uma senha:<span class="requir">*</span></strong></label>
            <input data-type="password" type="password" id="pass3">
            <div class="pass3"></div>
            <label for="pass4"><strong>Confirme sua senha:<span class="requir">*</span></strong></label>
            <input data-type="repeatPassword" type="password" id="pass4">
            <div class="pass4"></div>

            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Você aceita os termos e condições?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms_institution">
                  <label class="form-check-label" for="accept_terms_institution">Sim, aceito.</label>
                </div>
              </div>
            </div>
            <input class="submit" type="submit" value="Submit">
        </div>

      <?php include("./components/footer.php")?>
      <script src="./assets/scripts/signin.js"></script>
</body>
</html>