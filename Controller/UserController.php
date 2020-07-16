<?php 

class User
{
    
    private $nom;
    private $prenom;
    private $age;
    private $email;

    public function __construct(string $nom, string $prenom, int $age, string $email){
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = $age;
        $this->email = filter_var($email, FILTER_VALIDATE_EMAIL); //test si c'est un email si non return FALSE
    }

    

    public function __toString()
    {
        return 'nom : '.$this->nom.', prenom : '.$this->prenom.', age : '.$this->age.', email : '.$this->email;
    }

    /**
     * Get the value of nom
     */ 
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Get the value of prenom
     */ 
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Get the value of age
     */ 
    public function getAge()
    {
        return $this->age;
    }

    /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }
}
