<?php
include "inc/header.php";
?>
<div class="container-fluid p-0">
    <h1 class="text-center text-secondary my-4">All Products</h1>
    <div class="px-5 mb-5">
    <!-- grid of products -->
    <div class="row text-dark">
        <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
            <img class="img-fluid" src="inc/img/Echeveria Preta.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Echeveria Preta</h4>
                <p class="card-text">Price: $74.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Echeveria Preta">
            </div>
        </form>

        <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
            <img class="img-fluid" src="inc/img/Fiddle Leaf Fig.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Fiddle Leaf Fig</h4>
                <p class="card-text">Price: $54.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Fiddle Leaf Fig">
            </div>
        </form>

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
            <img class="img-fluid border" src="inc/img/Lava Rocks.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title my-2">Lava Rocks</h4>
                <p class="card-text">Price: $9.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Lava Rocks">
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

        <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
            <img class="img-fluid" src="inc/img/Floor-sized Pot 14 inch.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Floor-sized Pot 14 inch</h4>
                <p class="card-text">Price: $14.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Floor-sized Pot 14 inch">
            </div>
        </form>

        <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
            <img class="img-fluid" src="inc/img/Floor-sized Pot 11.5 inch.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title">Floor-sized Pot 11.5 inch</h4>
                <p class="card-text">Price: $14.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Floor-sized Pot 11.5 inch">
            </div>
        </form>

        <form action="product.php" method="POST" class="card hover col-3 p-2 mx-auto">
            <img class="img-fluid border mb-4" src="inc/img/Soil.jpg" alt="Card image" >
            <div class="card-body">
                <h4 class="card-title mt-3">Soil</h4>
                <p class="card-text mt-4">Price: $24.99</p>
                <input type="submit" class="btn btn-secondary px-3 text-white" name="pp" value="See Product >">
                <input type="hidden" name="product" value="Soil">
            </div>
        </form>
        <div class="col-6 my-5"></div>
    </div>
    </div>
</div>.

<?php
include "inc/footer.php";
?>