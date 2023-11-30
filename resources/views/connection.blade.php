<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



    <title>Contact</title>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default custom-navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">My Sneakers</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" style="color: purple;"><a href="/contact">Contact</a></li>

                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about">About Us</a></li>


            </ul>
        </div>
    </nav>

    <div class="container">
        <h2>Login Form</h2>
        <form>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" placeholder="Enter username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" placeholder="Enter password">
            </div>
            <button type="submit" class="btn btn-primary">Login</button>
        </form>
    </div>






    <script src="js/bootstrap.bundle.min.js"></script>
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/main.js"></script>


</body>

</html>