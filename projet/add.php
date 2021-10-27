<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

<?php
$nom=$_POST['nom'];
$age=$_POST['age'];

//echo $nom." ".$age;

//step 1 : connexion à mysql
include("connexion.php");

//step 2 : insertion des données dans la base

$res = $mysqli->query("insert into etudiant(nom,age)values('".$nom."','".$age."')");



/*echo"<script language=javascript>";
echo" alert('Inscription avec succes!')";
echo "</script>";*/


// redirection avec javascript
echo "<script>
alert('Inscription avec succes!');
window.location.href='etudiants.php';  
</script>";

?>
<!---div class="alert alert-success" role="alert">
  Ajout avec succès!
</!div-->

<!--div class="alert alert-success" role="alert">
  <h4 class="alert-heading">Bravo!</h4>
  <p>Inscription réussi.</p>

</!--div-->


<?php
//step 3 : redirection vers la page etudiants.php // redirection avec php

//header("Location:etudiants.php");

?>

</body>
</html>