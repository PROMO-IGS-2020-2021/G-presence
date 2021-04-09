<?php
include('../Config/connexion.php');
$id=$_GET["id"];
$sql="DELETE FROM apprenants WHERE id=:id";
$query=$bd->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();
header("Location:liste-apprenant.php");
?>