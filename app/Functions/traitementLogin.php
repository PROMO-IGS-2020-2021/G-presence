<?php include('connexion.php');

  if(isset($_POST["inscription"])){
    $email=htmlspecialchars($_POST['email']);
    $date_jour=date("Y-m-d");
    $password=htmlspecialchars($_POST['password']);
    if($email=="" || $password==""){
        echo "<script>alert('adresse mail et mot de passe sont requis')</script>";
        echo "<script>window.location.href='../../admin/index.php';</script>";
        
 }elseif(strlen($email)<6){
    echo "<script>alert('adresse mail doit contenir au moins 6 caracteres')</script>";
    //echo "<script>window.location.href='../../admin/index.php';</script>";
    
 }
 elseif(filter_var(!$email,FILTER_VALIDATE_EMAIL)){
    echo "<script>alert('adresse mail non valide')</script>";
    //echo "<script>window.location.href='../../admin/index.php';</script>";
    
 }
    $password_crypter=password_hash($password,PASSWORD_BCRYPT);
    //var_dump($password,$password_crypter);
    //die();
    $sql="SELECT * FROM users WHERE email=:email";
    $query=$bd->prepare($sql);
    //lier les paramettre
    $query->bindParam(':email', $email);
    //$query->bindParam(':password', $password_crypter);
    $query->execute(); 
    //recupère les données
    $data=$query->fetch();
   //$emailData=$data["email"];
    //var_dump($data);
   //var_dump($query->rowCount());
    if($query->rowCount()>0){
        //echo "<script>alert('votre adresse est incorrecte ')</script>";
       // echo "<script>window.location.href='../../admin/index.php';</script>"; 
        if(!password_verify($password,$data["password"])){
            echo"<script>alert('votre  mot de passe est incorrecte ')</script>";;
        }else{
         session_start();
         $_SESSION["id"]=$data["id"];
         $_SESSION["nom"]=$data["nom"];
         $_SESSION["prenoms"]=$data["prenoms"];
         header("Location:../../admin/dashboard.php");
        }
    }else{
       echo "<script>alert('votre adresse est incorrecte ')</script>";
       echo "<script>window.location.href='../../admin/index.php';</script>";
        
    }
    
  
  }
?>