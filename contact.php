<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contato</title>
  <link rel="stylesheet" href="./style/contact.css">
  <link rel="stylesheet" href="./style/setup.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

</head>
<body>
  <?php include('./components/navbar_logado.php') ?>


  <div class="contact">
    <h1>Contato</h1>
    <p>Entre em contato conosco. Estamos aqui para ajudá-lo a encontrar a oportunidade perfeita para voluntariar.</p>
  </div>

  <div class="container" style="margin-top:40px; margin-bottom:40px">
    <div class="row">

      <div class="col-md-6">
        <form>
          <h5>Seu nome</h5>
          <input type="text" class="form-control mb-3" placeholder="Nome completo">
          <h5>Seu email</h5>
          <input type="email" class="form-control mb-3" placeholder="email@exemplo.com">
          <h5>Assunto</h5>
          <input type="text" class="form-control mb-3" placeholder="Assunto">
          <h5>Mensagem</h5>
          <textarea class="form-control mb-3" rows="5" placeholder="Digite aqui a sua mensagem"></textarea>
          <button type="submit" class="btn btn-success">Enviar</button>
        </form>
      </div>
   
      <div class="col-md-6" style="margin-top:10px; margin-bottom:10px">
        <iframe src="https://maps.google.com/?q=-25.451663438476608,-49.25029431341601&output=svembed" style="width:100%; height:100%"></iframe>
      </div>
    </div>
  </div>

  </div>

  <?php include('./components/footer.php') ?>

</body>
</html>
