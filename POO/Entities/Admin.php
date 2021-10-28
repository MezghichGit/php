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