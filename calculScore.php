
<?php

//var_dump($_POST["case"]); // equivalent à console.log en js
if (count($_POST["case"]) == 3) {
    /*
    $v1 = $_POST["case"][0];
    $v2 = $_POST["case"][1];
    $v3 = $_POST["case"][2];
    echo "Votre score est : ". $v1 ." ".$v2." ".$v3;
    echo "</br>";
     */
    $score = 0;
    for ($i=0; $i<count($_POST["case"]); $i++) {
        $score = $score + intval($_POST["case"][$i]);
    }

    echo "Votre score est : ". $score;
    echo "</br>";
    if ($score>15) {
        echo "Bravo vous êtes expert";
    } else {
        echo "Vous êtes encore Junior";
    }
} else {
    echo "Vous devez choisir exactement 3 cases";
}
?>
