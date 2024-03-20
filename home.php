<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style/setup.css">
    <link rel="stylesheet" href="./style/home.css">
    <title>Document</title>
</head>
<body>
    <main >
            <?php include('./src/components/navbar2.php') ?>

            <section>
                <div class="mainImage container text-center">
                        <h2>Join Caring Crafters today on your journey to kindness</h2>
                        <h3>Connect with institutions in need of support!</h3>
                </div>
            </section >
            <section class="container suggested">
                <h4>Explore meaningful causes</h4>
                <div class="suggestedImages d-xl-flex d-lg-flex d-md-flex d-sm-none d-none">
                    <img  class="col-3" src="./resources/food.jpeg" alt="">
                    <div class="imageDuo" class="col-3">
                        <img class="col-6" src="./resources/agua.jpeg" alt="">
                        <img class="col-6" src="./assets/pexels-tobi-463734.jpg" alt="">
                    </div>
                    <img class="col-3" src="./resources/golden.jpeg" alt="">
                    <div class="imageDuo" class="col-3">
                        <img class="col-6" src="./resources/uniao2.jpeg" alt="">
                        <img class="col-6" src="./resources/tree.jpeg" alt="">
                    </div>
                </div>
                <div id="carouselExampleControls" class="carousel slide d-lg-none d-xl-none d-md-none" data-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                    <img class="d-block w-100" src="./resources/uniao2.jpeg" alt="First slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./resources/tree.jpeg" alt="Second slide">
                    </div>
                    <div class="carousel-item">
                    <img class="d-block w-100" src="./resources/agua.jpeg" alt="Third slide">
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
                </div>
            </section> 
            <section class="sectionCards container col-12">
                <h4>Top-rated institutions to look for</h4>
                <div class="suggestedCards col-12 d-flex flex-lg-row flex-md-row flex-sm-column flex-column" >
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4 >Contact for details</h4>
                        </div>
                    </div> 
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard col-lg-2 col-md-2 col-sm-12 col-12">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                </div>
            </section>
            <div class="message container d-flex flex-lg-row flex-md-row flex-xl-row flex-sm-column flex-column">
                <div>
                    <img src="" alt="">
                    <div class="offers">
                        <h4>Get exclusive offers and updates!</h4>
                        <p>Do you want to get involved in meaninful causes and support those in need?</p>
                        <p>Sign up and start making a difference today!</p>
                    </div>
                </div>
                <button class="join">JOIN NOW</button>
            </div>
        </main>
        <?php include('./src/components/footer.php') ?>
    <!--<script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>-->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>
</html>