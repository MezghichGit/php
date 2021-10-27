<?php

echo "<h1 align=center>Détails Cours</h1>";

$num = $_GET["num"];
$titre = $_GET["titre"];
$vh = $_GET["vh"];
$periode = $_GET["periode"];
$formateur = $_GET["formateur"];
echo "ID COURS = ". $num ."<br/>";
echo "Titre COURS = ".$titre ."<br/>";
echo "Volume COURS = ". $vh ."<br/>";
echo "Periode du COURS = ". $periode ."<br/>";
echo "Formateur COURS = ". $formateur ."<br/>";
?>