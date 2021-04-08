<?php
include('../Config/connexion.php');
$id=$_GET["id"];
$sql="DELETE FROM presence WHERE id_apprenant=:id";
$query=$bd->prepare($sql);
$query->bindParam(":id", $id);
$query->execute();
header("Location:liste-presence.php");
?>