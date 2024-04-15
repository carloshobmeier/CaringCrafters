<!DOCTYPE html>
<html lang="pt-BR">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsiva</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
  <!-- <link rel="stylesheet" href="style/volunteer.css"> pq isso? desativei pra ver se muda, qualquer coisa coloca dps-->
  <link rel="stylesheet" href="./style/setup.css">
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="home.php" style="text-decoration: none; color: black"><img src="./assets/brand_identity/Logo_PNG-verde.png" class="navbar-brand" style="max-width:80px">Caring Crafters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="rightside ms-auto">
          <div id="navButtons" class="buttonsNav">
            <button class="btn btn-outline-success">Instituições</button>
            <button class="btn btn-outline-success">Voluntários</button>
            <button class="btn btn-outline-success">Navegue</button>
          </div>
          <a href="#" id="profileLink"><img src="./assets/images/profile-picture.jpeg" alt="User Avatar" class="navbar-profile-pic"></a>
        </div>
      </div>
    </div>
  </nav>
</div>


<!-- Modal -->
<div class="modal fade" id="profileModal" tabindex="-1" aria-labelledby="profileModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-sm">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="profileModalLabel">Perfil</h5>
      </div>
      <div class="modal-body">
        <!-- Conteúdo do modal: imagem do usuário e botões -->
        <div class="modal-buttons text-center" style="display: flex; flex-direction: column; align-items: center;">
          <img src="./assets/images/profile-picture.jpeg" alt="User Avatar" class="modal-profile-pic elemento" width="50%" style="border-radius: 50%;">
          <div>
            <a href="profile_volunteer.php" class="btn btn-success elemento">Ver Perfil</a>
            <button type="button" class="btn btn-success elemento" id="logoutButton">Sair</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

<script>
  // Adicionamos um evento de clique ao link do perfil
  document.getElementById('profileLink').addEventListener('click', function(event) {
    event.preventDefault(); // Impede o comportamento padrão do link
    // Exibe o modal
    var myModal = new bootstrap.Modal(document.getElementById('profileModal'));
    myModal.show();
  });
</script>

<style>
  .elemento {
    margin: 15px;
  }


</style>

</body>
</html>
