<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
 <h1 align="center">Bienvenue à notre école IPSSI</h1>
<?php
// script php pour se connecter à la base

include("connexion.php");

// script pour l'affichage des data depuis la base

$res = $mysqli->query("SELECT * FROM cours");

echo "<h3 align=center>Nombre de cours de cours Dispo : ". $res->num_rows ."</h3>";
//var_dump($res);
echo"<br/>";
?>
<table align="center" class="table table-striped" border="1"/>
<tr><th>ID</th><th>Libélle</th><th>Volume horaire</th></tr>
<?php
while ($row = $res->fetch_assoc()) {
    echo"<tr>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['libelle'] . "</td>";
        echo "<td>" . $row['vh'] . "</td>";

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