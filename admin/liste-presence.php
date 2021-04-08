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
if(!isset($_SESSION["id"])){
    header("Location:index.php");
}
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
                $sql="SELECT apprenants.nom, apprenants.prenoms, presence.statut, apprenants.id, presence.date_jour FROM apprenants INNER JOIN presence ON apprenants.id=presence.id_apprenant";
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
                                <a onclick=" return confirm('Voulez-vous supprimer cette presence ?');" href="delete.php?id=<?php echo $value["id"]; ?>"><i class="fa fa-trash fa-2x"></i></a>
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
</html>