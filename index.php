<?php  include('Config/connexion.php');?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="public/assets/css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Login</title>
</head>
<body>
        <?php include_once('views/includes/navbar.php');?>
        <div class="container">
        <form action="app/Functions/traitementPresence.php" method="post" id="form-presence" onsubmit="return validerPresence();">
            <div class="row">
            
                <div class="col-md-6 mt-5">
                    <img src="public/assets/images/login.png" alt="login" class="loginImage">
                </div>
                <div class="col-md-6 mt-5">
                <div class="row">
                    <div class="col-lg-12">
                        <h4 class="form-title text-center">PRÉSENCE</h4>
                        <p class="text-center">(Marquer votre présence d'aujourd'hui)</p>
                            <div class="form-group">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Adresse Email">
                                <span id="erreur-email" class="text-danger"></span>
                            </div>
                    </div>
                    <div class="col-lg-12">
                        <button type="submit" name="inscription" class="btn btn-primary btn-block" >Valider</button>
                    </div>
                    
                </div>
                    
                    
                </div>
            </div>
            </form>
        </div>
        
<?php include_once('views/includes/footer.php');?>
<script type="text/javascript" src="public/assets/js/main.js"></script>
</body>
</html>