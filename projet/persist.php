<?php
//echo $_POST["id"];
//step 1 : connexion à mysql
include("connexion.php");

//step 2 : suppressin de l'étudiant de la base

$res = $mysqli->query("update etudiant set nom='".$_POST["nom"]."', age='".$_POST["age"]."' where id='".$_POST["id"]."'");


//$res = $mysqli->query("update etudiant set nom='MA', age='20' where id='".$_POST["id"]."'");
// redirection avec javascript
echo "<script>
alert('Mise à jour avec succes!');
window.location.href='etudiants.php';  
</script>";

?>