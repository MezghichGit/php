<?php



class Cours
{
    private $id;
    private $libelle;
    private $vh;

    public function __construct($libelle,$vh)
    {
        $this->libelle = $libelle;
        $this->vh = $vh;
        
    }
    

    /**
     * Get the value of libelle
     */ 
    public function getLibelle()
    {
        return $this->libelle;
    }

    /**
     * Set the value of libelle
     *
     * @return  self
     */ 
    public function setLibelle($libelle)
    {
        $this->libelle = $libelle;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of vh
     */ 
    public function getVh()
    {
        return $this->vh;
    }

    /**
     * Set the value of vh
     *
     * @return  self
     */ 
    public function setVh($vh)
    {
        $this->vh = $vh;

        return $this;
    }
}
?>