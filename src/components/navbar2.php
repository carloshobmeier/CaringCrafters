<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Navbar Responsiva</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">

  <link rel="stylesheet" href="style/volunteer.css">
  <link rel="stylesheet" href="./style/setup.css">
</head>
<body>

<div class="container">
  <nav class="navbar navbar-expand-md navbar-light">
    <div class="container-fluid">
      <a href="home.php" style="text-decoration: none; color: black"><img src="./brand_identity/Logo_PNG-verde.png" class="navbar-brand" style="max-width:80px">Caring Crafters</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <div class="rightside ms-auto">
          <div id="navButtons" class="buttonsNav">
            <button class="btn btn-outline-success">Institutions</button>
            <button class="btn btn-outline-success">Opportunities</button>
            <button class="btn btn-outline-success">Browse</button>
          </div>
          <a href="volunteer.php"><img src="./resources/profile-picture.jpeg" alt="User Avatar" class="navbar-profile-pic"></a>
        </div>
      </div>
    </div>
  </nav>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
