<?php
include('../Config/connexion.php');

if(isset($_POST["updateApprenants"])){
    $nom=trim(htmlspecialchars($_POST['nom']));
    $prenoms=trim(htmlspecialchars($_POST['prenoms']));
    $email=trim(htmlspecialchars($_POST['email']));
    $tel=trim(htmlspecialchars($_POST['tel']));
    $sexe=trim(htmlspecialchars($_POST['sexe']));
    $habitation=trim(htmlspecialchars($_POST['habitation']));
    $id=$_POST["id_apprenant"];

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
       elseif(!filter_var($tel,FILTER_SANITIZE_NUMBER_INT)){
        echo "<script>alert('Votre numéro de téléphone est valide')</script>";
        //echo "<script>window.location.href='../../admin/index.php';</script>";    
    }
    
    elseif(strlen($tel)<10){
        echo "<script>alert('Votre numéro de téléphone doit être au format 10 chiffres')</script>";
        //echo "<script>window.location.href='../../admin/index.php';</script>";    
    }else{

        $sql="UPDATE apprenants SET nom=:nom,prenoms=:prenoms,email=:email,telephone=:telephone,sexe=:sexe,lieu_habitation=:lieu_habitation WHERE id=:id";
        $query=$bd->prepare($sql);
        $query->bindParam(":nom", $nom);
        $query->bindParam(":prenoms", $prenoms);
        $query->bindParam(":email", $email);
        $query->bindParam(":telephone", $tel);
        $query->bindParam(":sexe", $sexe);
        $query->bindParam(":lieu_habitation", $habitation);
        $query->bindParam(":id", $id);

        $query->execute();
        header("Location:liste-apprenant.php");
    }
}

?>