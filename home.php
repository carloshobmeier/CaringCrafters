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
                <div class="mainImage">
                        <h2>Join Caring Crafters today on your journey to kindness</h2>
                        <h3>Connect with institutions in need of support!</h3>
                </div>
            </section >
            <section class="container suggested">
                <h4>Explore meaningful causes</h4>
                <div class="suggestedImages">
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
            </section> 
            <section class="sectionCards container col-12">
                <h4>Top-rated institutions to look for</h4>
                <div class="suggestedCards col-12" >
                    <div class="customCard">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4 >Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard">
                        <img src="./assets/pexels-tobi-463734.jpg" alt="">
                        <div>
                            <h5>Title</h5>
                            <h6>City</h6>
                        </div>
                        <div>
                            <h4>Contact for details</h4>
                        </div>
                    </div>
                    <div class="customCard">
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
            <div class="message container">
                <div>
                    <img src="" alt="">
                    <div class="offers">
                        <h4>Get exclusive offers and updates!</h4>
                        <p>Do you want to get involved in meaninful causes and support those in need?</p>
                        <p>Sign up and start making a difference today!</p>
                    </div>
                </div>
                <button>JOIN NOW</button>
            </div>
        </main>
        <?php include('./src/components/footer.php') ?>
    <script src="./assets/bootstrap-5.3.3-dist/bootstrap-5.3.3-dist/js/bootstrap.min.js"></script>
</body>
</html>