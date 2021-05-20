<?php
include "inc/header.php";
?>
<div class="container-fluid p-0 mb-4">
  <div class="row-fluid mx-0 mb-5">
        <!-- slider section start -->
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active slides">
                  <img src="inc/img/2.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption bg-dark col-4 caption">
                    <h3>Discounts</h3>
                    <p class="my-1">Get upto 20% off on your first purchase</p>
                    <a class="text-info fw-bold" href="store.php">Get it Now ></a>
                  </div>
              </div>
                <div class="carousel-item slides">
                  <img src="inc/img/5.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption caption bg-dark col-4">
                      <h3>Limited Time Offer</h3>
                      <p class="my-1">Buy 1 get 1 FREE!</p>
                      <a class="text-info fw-bold" href="store.php">Get it Now ></a>
                  </div>
                </div>
                <div class="carousel-item slides">
                  <img src="inc/img/3.jpg" class="d-block w-100" alt="...">
                  <div class="carousel-caption bg-dark col-4 caption mx-auto">
                    <h3>Complex Structure</h3>
                    <p>Let the plants grow to complex structures, and share their beauty</p>
                </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="fas fa-chevron-left fa-5x" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="fas fa-chevron-right fa-5x" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        <!-- slider section end -->

        <!-- Products section start -->
        <h1 class="text-center my-4">Most Popular Products</h1>
        <div class="px-5">
          <div class="row text-dark">
              <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
                  <img class="img-fluid" src="inc/img/Maranta.jpg" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Maranta</h4>
                    <p class="card-text">Price: $64.99</p>
                    <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                    <input type="hidden" name="product" value="Maranta">
                  </div>
              </form>

              <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
                  <img class="img-fluid" src="inc/img/Monstera Deliciosa.jpg" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Monstera Deliciosa</h4>
                    <p class="card-text">Price: $64.99</p>
                    <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                    <input type="hidden" name="product" value="Monstera Deliciosa">
                  </div>
              </form>

              <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
                  <img class="img-fluid" src="inc/img/Philodendron Green.jpg" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Philodendron Green</h4>
                    <p class="card-text">Price: $49.99</p>
                    <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                    <input type="hidden" name="product" value="Philodendron Green">
                  </div>
              </form>

              <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
                  <img class="img-fluid" src="inc/img/Watering Can.jpg" alt="Card image" >
                  <div class="card-body">
                    <h4 class="card-title">Watering Can</h4>
                    <p class="card-text">Price: $9.99</p>
                    <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                    <input type="hidden" name="product" value="Watering Can">
                  </div>
              </form>

              <div class="text-center mb-3">
                <a class="mt-4 px-4 btn btn-secondary" href="store.php">See More ></a>
              </div>
          </div>
        </div>
        <!-- Products section end -->
        <hr>

        <!-- features section start -->
        <form action="product.php" method="POST" class="px-5 mb-5">
            <div class="row my-5 px-5">
                <div class="col-8 mt-5">
                  <p class="lead">Featured Product</p>
                  <h1 class="text-dark">Echeveria Preta</h1>
                  <p class="text-dark my-4">A great desk plant with the iconic rosette-shape</p>
                  <input type="submit" class="btn btn-secondary px-4 text-white" name="pp" value="Buy Now >">
                    <input type="hidden" name="product" value="Echeveria Preta">
                </div>
                <div class="col-4">
                  <img class="img-fluid" src="inc/img/Echeveria Preta.jpg" alt="">
                </div>
            </div>
        </form>
        <!-- features section end -->
  </div>.
</div>
<?php
include "inc/footer.php";
?>
