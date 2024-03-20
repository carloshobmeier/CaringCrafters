<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="./style/signIn.css">
    <link rel="stylesheet" href="./style/setup.css">
</head>
<body id="body">
      <div class="signin pt-5">
        <h1>Sign In</h1>
      </div>

      <div class="radioButtons" id="radioButtons">
        <input type="radio" id="volunteer_radio" name="user_type" value="volunteer" onclick="toggleForm('volunteer')">
        <label for="volunteer_radio">
          <div class="card container justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            person_raised_hand
            </span>
            <h2 class="card-title">Volunteer</h2>
        </div>
        </label>
        <input type="radio" id="institution_radio" name="user_type" value="institution" onclick="toggleForm('institution')">
        <label for="institution_radio">
          <div class="card container d-flex flex-column justify-content-between align-items-center">
            <span class="material-symbols-outlined py-3">
            family_home
            </span>
            <h2 class="card-title">Institution</h2>
          </div></label>
      </div>

      <div id="volunteer" class="d-none content container container-fluid">
        <form class="d-flex flex-column" action="home.php">
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="name"><strong>Inform your full name:</strong></label>
              <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="name">
              <div class="name"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="username"><strong>Inform your CPF:</strong></label>
              <input data-type="cpf" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="cpf">
              <div class="cpf"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="email"><strong>Inform your e-mail:</strong></label>
              <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="email">
              <div class="email"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="phonenumber"><strong>Inform your phone number:</strong></label>
              <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="phonenumber">
              <div class="phonenumber"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="cep"><strong>Inform your CEP:</strong></label>
              <input data-type="cep" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="number" id="cep">
              <div class="cep"></div>
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="city"><strong>Inform your city:</strong></label>
              <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="city">
              <div class="city"></div>
            </div>
          </div>
          <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="birthdate"><strong>Inform your date of birth:</strong></label>
                <input data-type="dateOfBirth" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="birthdate">
                <div class="birthdate"></div>
              </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="gender"><strong>Inform your gender:</strong></label>
                <select class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" id="gender">
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                  <option value="other">Other</option>
                </select>
              </div>
            </div>

            <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="maritalstatus"><strong>Inform your marital status:</strong></label>
                <select class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" id="maritalstatus">
                  <option value="single">Single</option>
                  <option value="married">Married</option>
                  <option value="divorced">Divorced</option>
                  <option value="widowed">Widowed</option>
                </select>
              </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="education"><strong>Inform your highest level of education:</strong></label>
                <select class="col-12" id="education">
                  <option value="highschool">High School</option>
                  <option value="college">College</option>
                  <option value="bachelor">Bachelor's Degree</option>
                  <option value="master">Master's Degree</option>
                  <option value="phd">Ph.D.</option>
                </select>
              </div>
            </div>

            <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
              <label for="nationality"><strong>Inform your nationality:</strong></label>
              <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="nationality">
              <div class="nationality"></div>
            </div>
              <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="occupation"><strong>Inform your occupation:</strong></label>
                <input data-type="plainText" class="col-12" type="text" id="occupation">
                <div class="occupation"></div>
              </div>
            </div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-12">
                <label for="volunteering_experience"><strong>Do you have any previous experience with volunteering?</strong></label>
                <textarea class="form-control" id="volunteering_experience" rows="4"></textarea>
              </div>
            </div>
            <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-6">
              <label for="areas_of_interest"><strong>Areas of Interest:</strong></label>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest1" value="education">
                <label class="form-check-label" for="interest1">Education</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest2" value="environment">
                <label class="form-check-label" for="interest2">Environment</label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="checkbox" id="interest3" value="healthcare">
                <label class="form-check-label" for="interest3">Healthcare</label>
              </div>
              <!-- Add more options as needed -->
            </div>
          </div>



            <label for="pass1"><strong>Create a password:</strong></label>
            <input data-type="password" type="password" id="pass1">
            <div class="pass1"></div>
            <label for="pass2"><strong>Confirm your password:</strong></label>
            <input data-type="repeatPassword" type="password" id="pass2">
            <div class="pass2"></div>
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Do you accept the terms and conditions?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms">
                  <label class="form-check-label" for="accept_terms">Yes, I accept</label>
                </div>
              </div>
            </div>
            <input class="submit" type="submit" value="Submit">

        </form>
      </div>

      <div id="institution" class="d-none content container container-fluid">
    <form class="d-flex flex-column" action="home.php">
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_email"><strong>Inform your e-mail:</strong></label>
                <input data-type="email" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="email" id="institution_email">
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_phonenumber"><strong>Inform your phone number:</strong></label>
                <input data-type="number" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_phonenumber">
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_cep"><strong>Inform your CEP:</strong></label>
                <input data-type="cep" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="number" id="institution_cep">
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_city"><strong>Inform your city:</strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_city">
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_social_reasoning"><strong>Social Reasoning:</strong></label>
                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_social_reasoning">
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="institution_fantasy_name"><strong>Fantasy Name:</strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="institution_fantasy_name">
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12">
                <label for="institution_cnpj"><strong>CNPJ:</strong></label>
                <input data-type="cnpj" class="col-xl-12 co2-lg-11 col-sm-12 col-md-12 col-12" type="text" id="institution_cnpj">
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="founding_date"><strong>Founding Date:</strong></label>
                <input data-type="date" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="date" id="founding_date">
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="social_capital"><strong>Social Capital:</strong></label>
                <input data-type="plainText" class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="social_capital">
            </div>
        </div>
        <div class="d-flex flex-xl-row flex-lg-row flex-md-column flex-sm-column flex-column col-12">
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="administrator_name"><strong>Administrator Name:</strong></label>
                <input data-type="plainText" class="col-xl-11 col-lg-11 col-sm-12 col-md-12 col-12" type="text" id="administrator_name">
            </div>
            <div class="d-flex flex-column col-xl-6 col-lg-6 col-sm-12 col-md-12 col-12">
                <label for="working_hours"><strong>Working Hours:</strong></label>
                <input class="col-xl-12 col-lg-12 col-sm-12 col-md-12 col-12" type="text" id="working_hours">
            </div>
        </div>
        <div class="d-flex flex-row col-12">
            <div class="d-flex flex-column col-12">
                <label for="volunteering_areas"><strong>Areas of Volunteering:</strong></label>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="teaching" id="volunteering_area_teaching">
                    <label class="form-check-label" for="volunteering_area_teaching">Teaching</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="mentoring" id="volunteering_area_mentoring">
                    <label class="form-check-label" for="volunteering_area_mentoring">Mentoring</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="counseling" id="volunteering_area_counseling">
                    <label class="form-check-label" for="volunteering_area_counseling">Counseling</label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="administration" id="volunteering_area_administration">
                    <label class="form-check-label" for="volunteering_area_administration">Administration</label>
                </div>
                <!-- Add more checkboxes as needed -->
            </div>
        </div>
        <label for="pass1"><strong>Create a password:</strong></label>
            <input data-type="password" type="password" id="pass3">
            <label for="pass2"><strong>Confirm your password:</strong></label>
            <input data-type="repeatPassword" type="password" id="pass4">
            <div class="d-flex flex-row col-12">
              <div class="d-flex flex-column col-6">
                <label for="accept_terms"><strong>Do you accept the terms and conditions?</strong></label>
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="accept_terms_institution">
                  <label class="form-check-label" for="accept_terms_institution">Yes, I accept</label>
                </div>
              </div>
            </div>
            <input class="submit" type="submit" value="Submit">
        </div>

      <?php include("./src/components/footer.php")?>
      <script src="./assets/scripts/signin.js"></script>
</body>
</html>