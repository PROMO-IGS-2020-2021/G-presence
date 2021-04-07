<<<<<<< HEAD
<?php  include('../Config/connexion.php');?>
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
    <title>Liste de Présence</title>
</head>
<body>
<?php
session_start();
include "navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql="SELECT apprenants.nom, apprenants.prenoms, presence.statut, presence.date_jour FROM apprenants INNER JOIN presence ON apprenants.id=presence.id_apprenant";
                    $query=$bd->prepare($sql);
                    $query->execute();
                    $data=$query->fetchAll();
                    foreach ($data as $key => $value) {
                     ?> 
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value["nom"];?></td>
                            <td><?php echo $value["prenoms"];?></td>
                            <td><?php echo $value["date_jour"];?></td>
                            <td><?php echo $value["statut"];?></td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                                <a href="#"><i class="fa fa-trash fa-2x"></i></a>

                            </td>
                        </tr>
                    <?php 
                    }
                ?>
                </tbody> 
            </table>
        </div>
    </div>
</div>
















<?php
include "../views/includes/footer.php";
?>
</body>
=======
<?php  include('../Config/connexion.php');?>
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
    <title>Liste de Présence</title>
</head>
<body>
<?php
session_start();
include "navbar.php";
?>
<div class="container">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>Date</th>
                        <th>Statut</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql="SELECT apprenants.nom, apprenants.prenoms, presence.statut, presence.date_jour FROM apprenants INNER JOIN presence ON apprenants.id=presence.id_apprenant";
                    $query=$bd->prepare($sql);
                    $query->execute();
                    $data=$query->fetchAll();
                    foreach ($data as $key => $value) {
                     ?> 
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value["nom"];?></td>
                            <td><?php echo $value["prenoms"];?></td>
                            <td><?php echo $value["date_jour"];?></td>
                            <td><?php echo $value["statut"];?></td>
                            <td class="text-center">
                                <a href="#"><i class="fa fa-edit fa-2x"></i></a>
                                <a href="#"><i class="fa fa-trash fa-2x"></i></a>

                            </td>
                        </tr>
                    <?php 
                    }
                ?>
                </tbody> 
            </table>
        </div>
    </div>
</div>
















<?php
include "../views/includes/footer.php";
?>
</body>
>>>>>>> 8a07b457281546fe3510126cebf022e5558d636b
</html>