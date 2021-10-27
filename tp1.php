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
   
       

        echo "<h2 align=center>Tableau associatif à plusieurs ligne</h2>";


        // STEP 1 : Déclaration d'un tableau associatif
        $tab=array(
            array("ID"=>"1","Libelle"=>"Javascript","VH"=>"16"),
            array("ID"=>"2","Libelle"=>"PHP","VH"=>"14"),
            array("ID"=>"3","Libelle"=>"Ajax","VH"=>"2"),
            array("ID"=>"4","Libelle"=>"Bootstrap","VH"=>"6")
        );

        // STEP 2 : Itération et affichage du tableau
        echo "<table border=1 align=center>
          <tr><th>ID</th><th>Libelle</th><th>VH</th></tr>";
          
          for($i=0;$i<count($tab); $i++)
          {
              echo"<tr>";
                        echo"<td>". $tab[$i]["ID"]."</td>";
                        echo"<td>". $tab[$i]["Libelle"]."</td>";
                        echo"<td>". $tab[$i]["VH"]."</td>";
              echo"</tr>";
          }

        echo "</table>";

?>