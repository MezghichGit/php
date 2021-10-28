<?php
$mysqli = new mysqli("localhost", "root", "", "ippsi");
if ($mysqli->connect_errno) {
    echo "Échec lors de la connexion à MySQL : (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
else{
    //echo "Connexion réussi!";
}

?>