<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="manifest" href="../manifest.json">
    <link rel="stylesheet" href="../img">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/estilo.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<div class="container">
    <nav class="navbar navbar-light bg-light justify-content-between">
    <a class="navbar-brand"><h1>GeekSupport Shop</h1></a>

    <form class="form-inline">
      <a class="navbar-brand" href="../index.php">Principal</a>
      <a class="navbar-brand" href="../pages/cuenta.php">Login/SignUp</a>
      <a class="navbar-brand" href="carrito.php"><button type="button" class="btn btn-outline">
        <span class="material-icons">shopping_cart</span></a>
        </button>
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form>
    </nav> 
    <hr>
      
    <br><br><h3 class="text-center">Proceso de compra</h3> <br><br>
      <div class="container-sm">
        <div class="container">
            <div class="row align-items-start">
                <div class="col text-center">
                    Productos
                </div>
                <div class="col text-center">
                    Descripción del artículo
                </div>
                <div class="col text-center">
                    Destino
                </div>
                <div class="col text-center">
                    Precio del artículo
                </div>
            </div>
            <hr>
            <hr>
            <div class="row align-items-start">
                <div class="col ">
                    <img src="../img/img-1.jpg" class="rounded float-start" style="width: 200px; height: 180px;" alt="...">
                </div>
                <div class="col text-center">
                Intel Core i3-10ma Gen - 8GB RAM - 128GB SSD - 14"
                </div>
                <div class="col text-center">
                    General Felix Gomez #14 Colonia Palo VERDE
                    C.P 83280
                    Hermosillo, Sonora, Mexico.
                    Celular: +52 6624585434
                </div>
                <div class="col text-end">
                    $8,0000
                </div>
            </div><br>
            <div class="row align-items-start">
                <div class="col ">
                    <img src="../img/img-5.jpg" class="rounded float-start" style="width: 200px; height: 180px;" alt="...">
                </div>
                <div class="col text-center">
                    iPhone Xr Coral 128GB
                    Liberado de fábrica. Caja/Cargador/Protector
                </div>
                <div class="col text-center">
                    General Felix Gomez #14 Colonia Palo VERDE
                    C.P 83280
                    Hermosillo, Sonora, Mexico.
                    Celular: +52 6624585434
                </div>
                <div class="col text-end">
                    $7,500
                </div>
            </div>
            
        <div id="carrito" class="table-responsive">
            <table class="table">
                <tr>
                <th colspan="4" scope="col" class="text-right">SUB TOTAL :</th>
                <th scope="col">
                    <p id="subtotal">$15,500</p>
                </th>
            </tr>
            <tr>
                <th colspan="4" scope="col" class="text-right">IGV :</th>
                <th scope="col">
                    <p id="igv">2%</p>
                </th>
            </tr>
            <tr>
                <th colspan="4" scope="col" class="text-right">TOTAL :</th>
                <th scope="col">
                    <p id="total">$15,810</p>
                </th>
            </tr>
            </table>            
            <div class="col text-right">
                <a href="../index.php"><button type="button" class="btn btn-outline-success"> <h5>Pagar</h5> 
                <span class="material-icons">credit_score</span>
            </button></a>
            <tr>
            <br><br>
            </div>
        </div>
    </form>     
</body>
</html>