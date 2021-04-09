<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Dashboard</title>
</head>
<body>
<?php
session_start();
include('../Config/connexion.php');
include "navbar.php";
$date_jour=date("Y-m-d");
$sql="SELECT COUNT(*) AS total FROM presence WHERE date_jour=:date_jour";
$query=$bd->prepare($sql);
$query->bindParam(":date_jour", $date_jour);
$query->execute();
$data=$query->fetch();
                  
?>
    <div class="container">
        <div class="row">
            <div class="col-lg-4">
                <div class="card mt-4">
                    <div class="card-body text-center">
                        <h3>Nombre de présence</h3>
                        <p>Aujourd'hui</p>
                    (<?= $data["total"];?>)
                    </div>
                    <div class="card-footer text-center">
                        <a href="liste-presence.php">Voir liste présence</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php
include "../views/includes/footer.php";
?>
</body>

</html>