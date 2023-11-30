<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge" >
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/accueil.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



    <title>About us</title>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default custom-navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">My Sneakers</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" style="color: purple;"><a href="/about">About us</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/contact">Contact</a></li>
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

   
    <script src="js/bootstrap.bundle.min.js"></script>
    
    
</body>

</html>