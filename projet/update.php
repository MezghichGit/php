<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>

<body>

 <h1 align="center">Bienvenue à notre école IPSSI</h1>

 <h4 align="center">Modifier les infos d'un étudiant, veuiller remplir le formulaire ci-après:</h4>
 <form action="persist.php" method="post">


    <div class="row" style="margin-bottom: 1%;">
            <div class="col-4" align="right">ID</div>
            <div class="col-4" align="left"><input disabled value="<?php echo $_GET['id'];?>" class="form-control" type="text"/></div>
            <input  value="<?php echo $_GET['id'];?>" class="form-control" type="hidden" name="id"/>
    </div>
    <div class="row" style="margin-bottom: 1%;">
            <div class="col-4" align="right">Nom</div>
            <div class="col-4" align="left"><input value="<?php echo $_GET['nom'];?>" class="form-control" type="text" name="nom"/></div>
    </div>

    <div class="row" style="margin-bottom: 1%;">
        <div class="col-4" align="right">Age</div>
        <div class="col-4" align="left"><input value="<?php echo $_GET['age'];?>"  class="form-control" type="text" name="age"/></div>
    </div>

    <div class="row">
        <div class="col-4" align="right"></div>
        <div class="col-4" align="left"><input class="btn btn-success" type="submit" value="Modifier"/></div>
    </div>

 </form>
</body>
</html>