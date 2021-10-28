<?php

session_start();  // récupération de la variable globale $_SESSION

if (isset($_SESSION['login'])) { ?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>
<div class="row" style="margin-left:1%; margin-right:1%">
            <div class="col-6" align="left">Bienvenue <?php echo $_SESSION["nom"]?>   </div>
            <div class="col-6" align="right"><?php echo $_SESSION["login"]?> | <a href='logout.php'>Déconnexion</a></div>
        </div>
 <h1 align="center">Bienvenue à notre école IPSSI</h1>

 <h4 align="center">Pour ajouter un étudiant, veuiller remplir le formulaire ci-après:</h4>
 <form action="add.php" method="post">

    <div class="row" style="margin-bottom: 1%;">
            <div class="col-4" align="right">Nom</div>
            <div class="col-4" align="left"><input class="form-control" type="text" name="nom"/></div>
    </div>

    <div class="row" style="margin-bottom: 1%;">
        <div class="col-4" align="right">Age</div>
        <div class="col-4" align="left"><input class="form-control" type="text" name="age"/></div>
    </div>

    <div class="row">
        <div class="col-4" align="right"></div>
        <div class="col-4" align="left"><input class="btn btn-success" type="submit" value="Ajouter"/></div>
    </div>

 </form>
</body>
</html>
<?php
} else {
         echo "<script>
        alert('Vous n êtes pas authentifié!');
        window.location.href='login.html';  
        </script>";
     }
 ?> 