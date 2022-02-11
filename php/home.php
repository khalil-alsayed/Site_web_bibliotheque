<?php session_start(); ?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            text-align: center;
            background-image: url("splash.webp");


            background-repeat: no-repeat;
            background-size: cover;
        }



        .topnav {
            overflow: hidden;
            background-color: #333;
        }

        .topnav a {
            float: left;
            color: #f2f2f2;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            font-size: 17px;
        }

        .topnav a:hover {
            background-color: #ddd;
            color: black;
        }

        .topnav a.active {
            background-color: #04AA6D;
            color: white;
        }

        .topnav-right {
            float: right;
        }

        body {

            background-image: url(login.jpg);

        }
    </style>
</head>

<body>

    <div class="topnav">
        <a class="active" href="home.php">Accueil</a>
        <div class="topnav-right">
            <?php if ($_SESSION['types'] == 'admin') { ?>
                <a href="utilisateurs.php">Demande d'inscription dans le site</a> <?php } ?>
            <a href="Nosauteurs.php">Nos auteurs</a>
            <a href="rubrique.php">Nos rubriques</a>
            <a href="recherche.php">Recherche d'un livre</a>
            <a class="active" href="home0.php">Deconnexion</a>


        </div>
    </div>

    <div style="padding-left:16px">
        <h1>La Bibliothèque de l'île </h1>
        <h2>Bonjour <?php echo $_SESSION['nom'] . " " . $_SESSION['prenom']; ?> </h2>
    </div>



</body>

</html>