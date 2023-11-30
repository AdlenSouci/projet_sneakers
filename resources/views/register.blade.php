<!DOCTYPE html>
<html lang="fr">

<head>

    <meta charset="UTF-8">
    <meta http equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/contact.css') }}">
    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">



    <title>Register</title>

</head>

<body>

    <!-- Navigation Bar -->
    <nav class="navbar navbar-default custom-navbar ">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="#">My Sneakers</a>
            </div>
            <ul class="nav navbar-nav">
                <li class="active" style="color: purple;"><a href="/register">Register</a></li>
                <li><a href="/">Home</a></li>
                <li><a href="/shop">Shop</a></li>
                <li><a href="/about">About Us</a></li>


            </ul>
        </div>
    </nav>

    <div class="formulaire-contact">
        <h2>register</h2>

        <form action="index.php" method="post">
            <div class="champ">
                <label for="email">Email</label>
                <input type="email" name="email" placeholder="Email">
            </div>

            <div class="champ">
                <label for="password">Mot de passe</label>
                <input type="password" name="password" placeholder="Mot de passe">
            </div>

            <div class="champ">
                <label for="password_confirmation">Mot de passe (confirmation)</label>
                <input type="password" name="password_confirmation" placeholder="Mot de passe (confirmation)">
            </div>
            <input type="submit" value="Envoyer" class="btn rounded-pill">
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