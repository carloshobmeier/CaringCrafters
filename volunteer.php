<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Volunteer Profile</title>
  <link rel="stylesheet" href="style/volunteer.css">
  <link rel="stylesheet" href="./style/setup.css">
</head>
<body>
  <?php include('./src/components/navbar2.php') ?>


  <section class="banner">
    <img src="resources/banner.jpg" alt="Banner Image">
    <div class="profile">
      <div class="user-details">
          <img src="resources/profile-picture.jpeg" alt="User Avatar">
          <div>
            <h2><strong>User Name</strong></h2>
            <p>Location</p>
          </div>
          <div>
            <p><strong>Number of Opportunities:</strong> <span>37</span></p>
            <p><strong>Connections:</strong><span>120</span></p>
          </div>
          <br>
          <p><strong>About</strong></p>
          <p>I'm dedicated to giving back to my community through volunteer work. Whether it's supporting local charities or environmental initiatives, I'm committed to making a positive impact. Together, let's create a brighter future through service and compassion.</p>
          <br>
          <button class="edit-profile-button">Edit Profile</button>
      </div>
    </div>
  </section>

  <div class="sub-menu">
    <ul>
      <li><a href="#">All</a></li>
      <li><a href="#">Volunteers</a></li>
      <li><a href="#">Institutions</a></li>
      <li><a href="#">Following</a></li>
    </ul>
  </div>

  <section class="gallery">
    <!-- Lista de itens clicáveis -->
    <ul>
      <li><img src="resources/agua.jpeg" alt="Image 1"></li>
      <li><img src="resources/food.jpeg" alt="Image 2"></li>
      <li><img src="resources/golden.jpeg" alt="Image 3"></li>
      <li><img src="resources/tree.jpeg" alt="Image 4"></li>
      <li><img src="resources/uniao.jpeg" alt="Image 5"></li>
      <li><img src="resources/uniao2.jpeg" alt="Image 6"></li>
    </ul>
</section>

<div class="button-load"> 
    <button class="load-more-button">Load more</button>
</div>

<?php include('./src/components/footer.php') ?>

</body>
</html>



