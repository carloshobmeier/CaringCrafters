<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="./style/contact.css">
  <link rel="stylesheet" href="./style/setup.css">
</head>
<body>
  <?php include('./src/components/navbar2.php') ?>


  <div class="contact">
    <h1>Contact</h1>
    <p>Get in touch with us. We're here to assist you in finding the perfect volunteer opportunity.</p>
  </div>

  <div class="content">
    <form>
      <h5>Your name</h5>
      <input type="text" placeholder="Full name">
      <h5>Your email</h5>
      <input type="email" placeholder="email@example.com">
      <h5>Subject</h5>
      <input type="text" placeholder="Subject">
      <h5>Message</h5>
      <input type="text" placeholder="Type your message here"></input>
      <button type="submit">Send</button>
    </form>

<iframe src="https://maps.google.com/?q=-25.451663438476608,-49.25029431341601&output=svembed"></iframe>

  </div>

  <?php include('./src/components/footer.php') ?>

</body>
</html>
