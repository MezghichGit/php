<?php



class Admin{

    private $nom;
    private $login;
    private $mdp;

    public function __construct($nom,$login,$mdp)
    {
        $this->nom = $nom;
        $this->login = $login;
        $this->mdp = $mdp;
    }
    
    function addCours($cours)
    {

        include("connexion.php");
        $res = $mysqli->query("insert into cours(libelle,vh)values('".$cours->getLibelle()."','".$cours->getVh()."')");
        if($res)
        echo "<br/>Insertion réussi";

    }

    function deleteCours($id)
    {

        include("connexion.php");
        $res = $mysqli->query("delete from cours where id ='".$id."'");
        if($res)
        echo "<br/>Suppression réussie";

    }

    function displayAllCourses()
    {

        include("connexion.php");
        $res = $mysqli->query("SELECT * FROM cours");
        if($res)
        echo "<h3 align=center>Nombre de Cours : ". $res->num_rows ."</h3>";
        echo"<br/>";
        ?>
        <table align="center" class="table table-striped" border="1"/>
        <tr><th>ID</th><th>Libelle</th><th>VH</th>
        <?php
        while ($row = $res->fetch_assoc()) {
            echo"<tr>";
            echo "<td>" . $row['id'] . "</td>";
            echo "<td>" . $row['libelle'] . "</td>";
            echo "<td>" . $row['vh'] . "</td>"; ?>
        <?php
            echo"</tr>";
        }
        echo"</table>";

    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set the value of nom
     *
     * @return  self
     */ 
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get the value of login
     */ 
    public function getLogin()
    {
        return $this->login;
    }

    /**
     * Set the value of login
     *
     * @return  self
     */ 
    public function setLogin($login)
    {
        $this->login = $login;

        return $this;
    }

    /**
     * Get the value of mdp
     */ 
    public function getMdp()
    {
        return $this->mdp;
    }

    /**
     * Set the value of mdp
     *
     * @return  self
     */ 
    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }
}

?>