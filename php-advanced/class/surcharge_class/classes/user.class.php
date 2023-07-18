<?php

class User {

    protected $user_name;
    protected $user_pass;
    
    public function __construct($n, $p){
        $this->user_name = $n;
        $this->user_pass = $p;
    }
    
    public function __destruct(){
        //Du code à exécuter
    }
    
    public function getNom(){
        echo $this->user_name;
    }
}

?>