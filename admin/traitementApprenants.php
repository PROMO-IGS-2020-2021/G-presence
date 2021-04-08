<?php  include('../Config/connexion.php');
    if(isset($_POST["AjoutApprenants"])){
        $nom=trim(htmlspecialchars($_POST['nom']));
        $prenoms=trim(htmlspecialchars($_POST['prenoms']));
        $email=trim(htmlspecialchars($_POST['email']));
        $tel=trim(htmlspecialchars($_POST['tel']));
        $sexe=trim(htmlspecialchars($_POST['sexe']));
        $habitation=trim(htmlspecialchars($_POST['habitation']));
        if (empty($nom) || empty($prenoms)  || empty($email)  || empty($tel)  || empty($sexe) || empty($habitation)){
            echo "<script>alert('Tout les champs sont requis *')</script>";
            echo "<script>window.location.href='participants.php';</script>";
        } else if(strlen($nom)<3 || strlen($prenoms)<3 || strlen($email)<3 || strlen($habitation)<3 || strlen($tel)!=10 ){
            echo "<script>alert('Ce champ doit comporter au moins 3 caractères')</script>";
            echo "<script>window.location.href='participants.php';</script>";
        } elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
            echo "<script>alert('adresse mail non valide')</script>";
            //echo "<script>window.location.href='../../admin/index.php';</script>";    
           }
    }
?>
