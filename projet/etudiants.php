<html>
<head>
    <meta charset="UTF-8">
</head>

<body>
 <h1 align="center">Bienvenue à notre école IPSSI</h1>
<?php
// script php pour se connecter à la base

$mysqli = new mysqli("localhost", "root", "", "ippsi");
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
    echo "Connexion réussi!";
}

// script pour l'affichage des data depuis la base

$res = $mysqli->query("SELECT * FROM etudiant");
//var_dump($res);
echo"<br/>";
while ($row = $res->fetch_assoc()) {
    echo " id = " . $row['id'] . "\n";
    echo " nom = " . $row['nom'] . "\n";
    echo " age = " . $row['age'] . "\n";

    echo"<br/>";
}

/*
for($i=0; $i< $res->num_rows; $i++) {

    $row = $res[$i]->fetch_assoc();
    echo "id = " . $row['id'] . "\n";
}*/

?>
</body>
</html>