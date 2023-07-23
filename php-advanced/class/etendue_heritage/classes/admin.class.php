<?php

class Admin extends User
{
    private $ban;
    
    public function setBan($b){
        $this->ban[] .= $b;
    }
    public function getBan(){
        echo 'Utilisateurs bannis par '. $this->user_name . ' : ';
        foreach($this->ban as $valeur){
            echo $valeur . ', ';
        }
    }
	//impossible to manage
	/*public function getNom2()
	{
		return $this->user_name;
	}

	public function getNom()
	{
		return $this->user_name;
	}*/
}

?>