<?php

$id = $_GET['id'];

//step 1 : connexion à mysql
include("connexion.php");

//step 2 : suppressin de l'étudiant de la base

$res = $mysqli->query("delete from etudiant where id='".$id."'");



// redirection avec javascript
echo "<script>
alert('Suppresion avec succes!');
window.location.href='etudiants.php';  
</script>";

?>
