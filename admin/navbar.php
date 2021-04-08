
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="#"><img src="../public/assets/images/logo-igs2.png" alt="" class="logo-igs"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
<?php   if(isset($_SESSION["id"])){
 ?>
<div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav ml-auto">
    <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Paramètres        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#"><?php if(isset($_SESSION["id"])){echo $_SESSION["nom"]." ". $_SESSION["prenoms"];}?></a>
          <a class="dropdown-item" href="logout.php">Déconnexion</a>
        </div>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
Apprenants        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
          <a class="dropdown-item" href="#">Ajouter</a>
          <a class="dropdown-item" href="liste-presence.php">Liste</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Presences</a>
      </li>
    </ul>
  </div>
 <?php  
}

?>
  
</nav>