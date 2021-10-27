<?php

echo "<h1>Merci pour votre inscription</h1>";

$votreNom = $_POST["nom"];
$votreMdp = $_POST["mdp"];
echo "Merci ".$votreNom . "Votre mdp :".$votreMdp;

?>