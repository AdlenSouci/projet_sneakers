<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />



    <title>My sneakers</title>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default custom-navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">My Sneakers</a>
            </div>
            <ul class="nav navbar-nav">


                <li class="active" style="color: purple;"><a href="/index">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about">About Us</a></li>
                <li><a href="/contact">Contact</a></li>
                <li><a href="/connection">connection</a></li>
                <li><a href="/register">register</a></li>




            </ul>
        </div>
    </nav>


    <!-- Main Content -->
    <div class="container mt-4">
        <div class="row">
            <div class="col-md-8">
                <div class="main-text">
                    <h1>Welcome to My Sneakers</h1>
                    <p class="lead">
                        My Sneakers is the online sneaker store that offers a wide selection of models, brands, and prices. Whether you're a seasoned collector or a casual sneaker enthusiast, you'll find the shoes that suit you on our site.
                    </p>
                    <p class="lead">
                        We offer a diverse range of sneakers, from classic models to exclusive ones. You'll find sneakers from all major brands, such as Nike, Adidas, Jordan, Converse, Puma, etc. You can also explore sneakers in different categories, including running, basketball, tennis, and more.
                    </p>
                </div>
            </div>
            <div class="col-md-4">
                <!-- Logo Section -->
                <div class="logo-section text-end mt-3">
                    <img src="{{ asset('img/logo.png') }}" alt="My Sneakers Logo" class="logo-img">
                </div>
            </div>
        </div>

    </div>
<!--
    <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('img/sneakers1.png') }}" class="d-block w-50" alt="new balance">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/sneakers2.png') }}" class="d-block w-50" alt="dunk">
          </div>
          <div class="carousel-item">
            <img src="{{ asset('img/sneakers3.png') }}" class="d-block w-50" alt="j4 military blue">
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>


    --> 
      

  
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>

</html>