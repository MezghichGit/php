<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
 <h1 align="center">Bienvenue à notre école IPSSI</h1>
<div class="row">
<div class="col-6">

</div>
<div class="col-6" align="right">
<a href="addEtudiant.html" class="btn btn-success">Ajouter</a> 
</div>
</div>

<?php
// script php pour se connecter à la base

include("connexion.php");

// script pour l'affichage des data depuis la base

$res = $mysqli->query("SELECT * FROM etudiant");

echo "<h3 align=center>Nombre de stagiaires : ". $res->num_rows ."</h3>";
//var_dump($res);
echo"<br/>";
?>
<h3>Pour visiter la liste des cours dispo cliquer <a class="btn btn-primary" href="cours.php">ici</a></h3> 
<table align="center" class="table table-striped" border="1"/>
<tr><th>ID</th><th>Nom</th><th>Age</th><th>Modifier</th><th>Supprimer</th></tr>
<?php
while ($row = $res->fetch_assoc()) {
    echo"<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['nom'] . "</td>";
    echo "<td>" . $row['age'] . "</td>";
?>
    <td><a class="btn btn-warning" href="update.php?id=<?php echo $row['id']; ?>&nom=<?php echo $row['nom']; ?>&age=<?php echo $row['age']; ?>">Modifier</a></td>
    <td><a class="btn btn-danger" href="delete.php?id=<?php echo $row['id']; ?>">Supprimer</a></td>
<?php
    echo"</tr>";
}
echo"</table>";

/*
for($i=0; $i< $res->num_rows; $i++) {

    $row = $res[$i]->fetch_assoc();
    echo "id = " . $row['id'] . "\n";
}*/

?>
</body>
</html>