<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Ajouter participants</title>
</head>
<body>
<?php
        session_start();
        if(!isset($_SESSION["id"])){
            header("Location:index.php");
        }
        include "navbar.php";
        ?>
        <div class="container mt-5">
        <h3 class="text-center mb-5">FORMULAIRE D'AJOUT DES APPRENANTS</h3>
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                <form action="#" method="POST" onsubmit="return validerAjoutApprenants();">
                    <div class="form-group">
                            <input class="form-control" type="text" name="nom" placeholder="nom">
                            <span id="erreurnom"></span>
                    </div>
                    <div class="form-group">
                            <input class="form-control" type="text" name="prenoms" placeholder="prenoms">
                            <span id="erreurprenoms"></span>
                    </div>
                    <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="email">
                            <span id="erreurmail"></span>
                    </div>
                    <div class="form-group">
                            <input class="form-control" type="tel" name="tel" placeholder="numéro de téléphone">
                            <span id="erreurtel"></span>
                    </div>
                    <div class="form-group">Sexe :
                            <input type="radio" name="sexe"> Homme
                            <input type="radio" name="sexe"> Femme <br>
                            <span id="erreursexe"></span>
                    </div>
                    <div class="form-group">
                            <input class="form-control" type="text" name="habitation" placeholder="Lieu d'habitation">
                            <span id="erreurhabitation"></span>
                    </div>
                    <button class="btn btn-primary btn-block mb-5" type="submit">Envoyer</button>
                </form>
                </div>
            </div>
        </div>
        <?php
        include "../views/includes/footer.php";
?>
<script type="text/javascript" src="../public/assets/js/main.js"></script>
</body>
</html>