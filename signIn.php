<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>
    <link rel="stylesheet" href="./style/signIn.css">
</head>
<body>
    <header>
        <div class="menu">
          <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">Opportunit</a></li>
            <li><a href="#">Institutions</a></li>
            <li><a href="#">Profiles</a></li>
            <li><a href="#">Connect</a></li>
          </ul>
          <div class="buttons">
            <button class="login">Log in</button>
            <button class="signup">Sign up</button>
          </div>
        </div>
      </header>

      <div class="signin">
        <h1>Sign In</h1>
      </div>

      <div class="content">
        <form action="#">
            <label for="name"><strong>Inform your name:</strong></label>
            <br>
            <br>
            <input type="text" id="name">
            <br>
            <br>
            <label for="username"><strong>Inform your username:</strong></label>
            <br>
            <br>
            <input type="text" id="username">
            <br>
            <br>
            <label for="email"><strong>Inform your e-mail:</strong></label>
            <br>
            <br>
            <input type="email" id="email">
            <br>
            <br>
            <label for="phonenumber"><strong>Inform your phone number:</strong></label>
            <br>
            <br>
            <input type="text" id="phonenumber">
            <br>
            <br>
            <label for="pass1"><strong>Create a password:</strong></label>
            <br>
            <br>
            <input type="password" id="pass1">
            <br>
            <br>
            <label for="pass2"><strong>Confirm your password:</strong></label>
            <br>
            <br>
            <input type="password" id="pass2">
            <br>
            <br>
            <input class="submit" type="submit" value="Submit">
        </form>
      </div>

      <footer>
        <div class="contact-info">
          <div>
            <h3>Call us</h3>
            <p>+1234567890</p>
          </div>
          <div>
            <h3>Email us</h3>
            <p>info@example.com</p>
          </div>
          <div>
            <h3>Visit us</h3>
            <p>123 Main St, City, Country</p>
          </div>
        </div>
      </footer>
</body>
</html>