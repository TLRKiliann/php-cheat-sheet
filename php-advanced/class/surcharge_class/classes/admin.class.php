<?php

class Admin extends User {
    
    protected $ban;
    
    /*
    public function __construct($n, $p){
        $this->user_name = strtoupper($n);
        $this->user_pass = $p;
    }
    
    public function getNom(){
        return strtoupper($this->user_name);
    }
    */

    //Résolution de portée sur une méthode surchargée.
    public function __construct($n, $p)
    {
        $this->user_name = strtoupper($n);
        $this->user_pass = $p;
    }

    public function getNom()
    {
        parent::getNom();
        echo ' (depuis la classe étendue)<br>';
    }
    
    public function setBan($b)
    {
        $this->ban[] .= $b;
    }
    
    public function getBan()
    {
        echo 'Utilisateurs bannis par '.$this->user_name. ' : ';
        foreach($this->ban as $valeur){
            echo $valeur .', ';
        }
    }
}

?>