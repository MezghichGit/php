<?php
echo "<h1 align=center>Bonjour PHP</h1>";

$formateur="Amine Mezghich";

// La concaténation se fait via le "."
echo"<h3>Formateur :".$formateur."</h3>"; # fin de ligne

$nbJours=4;

echo $nbJours;  // 4
echo "$nbJours"; //4
echo '$nbJours'; // $nbJours


$tableau = array(
    "Marque" => "Renault" ,
    "Modele" => "Clio",
    "Matricule" => "120TU5100" ) ;

// première méthode
echo "<table border=1 align=center>
          <tr><th>Marque</th><th>Modele</th><th>Matricule</th></tr>
          <tr><td>".$tableau["Marque"]."</td><td>".$tableau["Modele"]."</td><td>".$tableau["Matricule"]."</td></tr></table>";

// deuxième méthode
?>
          <br/><br/><br/>
          <table border="1" align="center">
          <tr><th>Marque</th><th>Modele</th><th>Matricule</th></tr>
<?php
       echo"<tr><td>".$tableau["Marque"]."</td><td>".$tableau["Modele"]."</td><td>".$tableau["Matricule"]."</td></tr></table>";
     
?>