<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GeekSupport-Shop</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link rel="stylesheet" href="css/estilo.css">
</head>
<body>
    <div class="container">
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand"><h1>GeekSupport Shop</h1></a>
    <form class="form-inline">
      <a class="navbar-brand" href="index.php">Principal</a>
      <a class="navbar-brand" href="pages/cuenta.php">Login/SignUp</a>
      <a class="navbar-brand" href="pages/carrito.php"><button type="button" class="btn btn-outline">
        <span class="material-icons">shopping_cart</span></a>
        </button>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav>     
    <hr>
    <br><br><h3 class="text-center">Productos Disponibles</h3> <br><br>
    <h4>
    <button type="button" class="btn btn-outline-success">
        <span class="material-icons">notifications</span>
    </button>
    <a href="pages/carrito.php"><button type="button" class="btn btn-outline-success">
        <span class="material-icons">shopping_cart</span>
    </button></a>
    </h4>
    <!--<div class="row" id="items"></div>-->
    <div class="row align-items-start">
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-1.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Laptop Asus</h5>
          <p class="card-text">Intel Core i3-10ma Gen - 8GB RAM - 128GB SSD - 14"</p>
          <p class="card-text text-end fw-bold">$8,000</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Comprar ahora</a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-2.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Laptop HP Stream</h5>
          <p class="card-text">Intel Celeron - 4GB RAM - 32GB SSD - 14" </p>
          <p class="card-text text-end fw-bold">$4,400</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Comprar ahora </a>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-3.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Macbook Pro 13 inch 2012</h5>
          <p class="card-text">Intel Core i5 - 8GB RAM - 256GB SSD - 13.3"</p>
          <p class="card-text text-end fw-bold">$6,900</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Comprar ahora</a>
        </div>
      </div>
    </div>
    <br> <br><br>     
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-4.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Laptop HP 14</h5>
          <p class="card-text">Intel Core i5-10ma - 8GB RAM - 256GB SSD</p>
          <p class="card-text text-end fw-bold">$9,500</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Comprar ahora </a>
        </div>
      </div>
    </div>
    <br>
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-5.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">iPhone Xr Coral 128GB</h5>
          <p class="card-text">Liberado de fábrica. Caja/Cargador/Protector</p>
          <p class="card-text text-end fw-bold">$7,500</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Comprar ahora<</a>
        </div>
      </div>
    </div>
    <br>
    <div class="col">
      <div class="card" style="width: 18rem; height: 32rem;">
        <img src="img/img-6.jpg" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Huawei MediaPad T5</h5>
          <p class="card-text">32GB + 3GB RAM - 10.1"</p>
          <p class="card-text text-end fw-bold">$3,500</p>
          <a href="pages/carrito.php" class="btn btn-outline-success" type="button">Añadir al carrito<</a>
        </div>
      </div>
    </div>
</div>
    <br>
    <footer class="bg-dark text-center text-white">
  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0,0,0,0.2);">
    © 2021 GeekSupport-Shop: 
    <a class="text-white" href="https://mdbootstrap.com/">GeekSupport.com</a>
  </div>
  <!-- Copyright -->
</footer>
    <script src="app.js"></script>
</body>
</html>
