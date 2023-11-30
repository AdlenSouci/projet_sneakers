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

    <div class="formulaire-contact">
        <h2>Formulaire de contact</h2>

        <form action="index.php" method="post">
            <div class="champ">
                <label for="nom">Name</label>
                <input type="text" id="nom" name="nom">
            </div>

            <div class="champ">
                <label for="prenom">Surname</label>
                <input type="text" id="prenom" name="prenom">
            </div>

            <div class="champ">
                <label for="email">e-mail</label>
                <input type="email" id="email" name="email">
            </div>

            <div class="champ">
                <label for="objet">Object</label>
                <input type="text" id="objet" name="objet">
            </div>

            <div class="champ">
                <label for="message">Message</label>
                <textarea id="message" name="message"></textarea>
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