<?php

class Personne
{
    protected $nom;
    protected $age;
    public function __construct($nom, $age)
    {
        $this->nom= $nom;
        $this->age= $age;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
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
     * Set the value of age
     *
     * @return  self
     */ 
    public function setAge($age)
    {
        $this->age = $age;

        return $this;
    }
}

class Etudiant extends Personne{
    protected $classe;

    public function __construct($nom, $age,$classe)
    {
       // $this->nom= $nom;
       // $this->age= $age;
        parent::__construct($nom,$age);
        $this->classe= $classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */ 
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    

    /**
     * Get the value of classe
     */ 
    public function getClasse()
    {
        return $this->classe;
    }
}
/*
$p=new Personne("Amine",20);
//echo $p->nom." ".$p->age;

echo $p->getNom()." ".$p->getAge();

$q = $p->setNom("Mezghich");

echo "<br/>";
echo $q->getNom();*/

$student = new Etudiant("Amine",36,"Terminal");

echo "Nom = ".$student->getNom()."<br/>";
echo "Age = ".$student->getAge()."<br/>";
echo "Classe = ".$student->getClasse()."<br/>";