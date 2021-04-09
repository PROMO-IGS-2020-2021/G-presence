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
    <title>Liste apprenants</title>
</head>
<body>
<?php
session_start();
if(!isset($_SESSION["id"])){
    header("Location:index.php");
}
include "navbar.php";
?>
<div class="container mt-4">
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-bordered">
                <thead class="table-dark">
                    <tr>
                        <th>Numéro</th>
                        <th>Nom</th>
                        <th>Prénoms</th>
                        <th>email</th>
                        <th>telephone</th>
                        <th>Sexe</th>
                        <th>lieu habitation</th>
                        <th>Date inscription</th>
                        <th>Action</th>
                        
                    </tr>
                </thead>
                <tbody>
                <?php 
                $sql="SELECT * FROM apprenants";
                    $query=$bd->prepare($sql);
                    $query->execute();
                    $data=$query->fetchAll();
                    foreach ($data as $key => $value) {
                     ?> 
                        <tr>
                            <td><?php echo $key+1; ?></td>
                            <td><?php echo $value["nom"];?></td>
                            <td><?php echo $value["prenoms"];?></td>
                            <td><?php echo $value["email"];?></td>
                            <td><?php echo $value["telephone"];?></td>
                            <td><?php echo $value["sexe"];?></td>
                            <td><?php echo $value["lieu_habitation"];?></td>
                            <td><?php echo $value["date_inscription"];?></td>
                            <td class="text-center">
                                <a onclick=" return confirm('Voulez-vous modifier ?');" href="update-apprenant.php?id=<?php echo $value["id"]; ?>"><i class="fa fa-edit fa-2x"></i></a>
                                <a onclick=" return confirm('Voulez-vous supprimer cette presence ?');" href="deleteApprenant.php?id=<?php echo $value["id"]; ?>"><i class="fa fa-trash fa-2x"></i></a>
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