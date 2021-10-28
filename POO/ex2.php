<?php
include("./Entities/Admin.php");
include("./Entities/Cours.php");

/*$libelle = $_POST['libelle'];
$vh = $_POST['vh'];

$monCours = new Cours($libelle,$vh); // création d'objet Cours

echo $monCours->getLibelle()." ".$monCours->getVh();
*/
$admin = new Admin("Amine","amine.mezghich@gmail.com","123456");

$admin->deleteCours(6);