<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact</title>
  <link rel="stylesheet" href="./style/contact.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./src/components/navbar2.php') ?>


  <div class="contact">
    <h1>Contact</h1>
    <p>Get in touch with us. We're here to assist you in finding the perfect volunteer opportunity.</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6">
        <form>
          <h5>Your name</h5>
          <input type="text" class="form-control mb-3" placeholder="Full name">
          <h5>Your email</h5>
          <input type="email" class="form-control mb-3" placeholder="email@example.com">
          <h5>Subject</h5>
          <input type="text" class="form-control mb-3" placeholder="Subject">
          <h5>Message</h5>
          <textarea class="form-control mb-3" rows="5" placeholder="Type your message here"></textarea>
          <button type="submit" class="btn btn-success">Send</button>
        </form>
      </div>
   
      <div class="col-md-6" style="margin-top:10px; margin-bottom:10px">
        <iframe src="https://maps.google.com/?q=-25.451663438476608,-49.25029431341601&output=svembed" style="width:100%; height:100%"></iframe>
      </div>
    </div>
  </div>

  </div>

  <?php include('./src/components/footer.php') ?>

</body>
</html>
