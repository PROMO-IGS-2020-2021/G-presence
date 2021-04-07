<?php
include('../../Config/connexion.php');
    /*
    1- Verifier si l'email de l'apprenant existe dans la table apprenant
    
        a- si ou valider sa présence dans la table présence 
            -recuperation de l'adresse email de l'apprenant
                -insertion dans la table presence(id_apprenant,date_jour,status,date_ajout)
    2- Si il n'existe pas alors afficher un message : adresse email n'existe pas
    */
    
   //Verifier si l'email de l'apprenant existe dans la table apprenant
   $email=htmlspecialchars($_POST['email']);
   $date_jour=date("Y-m-d");
   $sql="SELECT * FROM apprenants WHERE email=:email";
   $query=$bd->prepare($sql);
   //lier les paramettre
   $query->bindParam(':email', $email);
   $query->execute(); 
   //recupère les données
   $data=$query->fetch();
   $emailData=$data["email"];
   //verifie si l'apprenant a marquer sa presence pour la date d'aujourd'hui
   $sql2="SELECT * FROM presence WHERE id_apprenant=:id AND date_jour=:date_jour";
   $query2=$bd->prepare($sql2);
   //lier les paramettre
   $query2->bindParam(':id', $data['id']);
   $query2->bindParam(':date_jour', $date_jour);
   
   $query2->execute(); 
   //recupère les données
   $dataApprenant=$query2->fetch();
   
   //$apprenantData=$dataApprenant["email"];
   //si l'apprenant n'existe pas on affiche un message
   if(empty($emailData)){
    echo "<script>alert('adresse email introuvable')</script>";
    echo "<script>window.location.href='../../index.php';</script>";
       
      
   }elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
    echo "adresse email non valide";
    die();
   }elseif($query2->rowCount()>0){
    echo "<script>alert('Vous êtes déjà présent pour ce jour')</script>";
    echo "<script>window.location.href='../../index.php';</script>";
   }
   else{
    //insert dans table presence
    $id=$data["id"];
    
    $date_ajout=date("Y-m-d h:i:s");
    $statut="Oui";
    $sql="INSERT INTO presence(id_apprenant,date_jour,statut,date_ajout) VALUES(:id_apprenant,:date_jour,:statut,:date_ajout)";
    $query=$bd->prepare($sql);
    $query->bindParam(':id_apprenant',$id);
    $query->bindParam(':date_jour', $date_jour);
    $query->bindParam(':statut', $statut);
    $query->bindParam(':date_ajout', $date_ajout);
    $query->execute();
    
    echo "<script>alert('Votre présence a été validée')</script>";
    echo "<script>window.location.href='../../index.php';</script>";

    
   }
?>