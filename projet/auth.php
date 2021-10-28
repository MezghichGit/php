<?php
$username=$_POST['username'];
$password=$_POST['password'];



//step 1 : connexion à mysql
include("connexion.php");

//step 2 : insertion des données dans la base

$res = $mysqli->query("select * from administrateur where login='".$username."' and password='".$password."'");
if($res->num_rows == 0)
{
    echo "<script>
    alert('Paramètres de connexion invalides!');
    window.location.href='login.html';  
    </script>";
}
else{

    // step 3 : création de la session
    //echo"Nbre :". $res->num_rows;
    $row = $res->fetch_assoc();
    session_start();
    $_SESSION['nom'] = $row['nom'];
    $_SESSION['login'] = $row['login'];
    //echo $_SESSION['nom'] . " ".$_SESSION['login'];
    header('Location:etudiants.php');

}


?>