<?php

abstract class Utilisateur
{
	protected $user_name;
	protected $user_pass;
	protected $prix_abo;

	public const ABONNEMENT = 24;

	public function __destruct()
	{
		// some code.
	}

	//abstract public function getPrixAbo();
	
	public function getNom()
	{
		echo $this->user_name;
	}

	public function getPrixAbo()
	{
		echo $this->prix_abo;
	}
}


class Admin extends Utilisateur
{

	public function __construct($n, $p)	
	{
		// convert string to uppercase.
	    $this->user_name = strtoupper($n);
	    $this->user_pass = $p;
	}

    public function setPrixAbo()
   	{
        if ($this->user_name === 'HENRY') 
        {
            echo $this->prix_abo = parent::ABONNEMENT / 6;
        }
        else 
        {
            echo $this->prix_abo = parent::ABONNEMENT / 3;
        }
    }
}


class CoAdmin extends Utilisateur
{

    public function __construct($n, $p)
    {
    	// no uppercase required.
        $this->user_name = $n;
        $this->user_pass = $p;
    }
    
    public function setPrixAbo()
    {
        if ($this->user_name === 'Jimy')
        {
            echo $this->prix_abo = parent::ABONNEMENT / 2;
        }
        else
        {
            echo $this->prix_abo = parent::ABONNEMENT;
        }
    }
}

$pierre = new CoAdmin("Jimy", "1234");
$pierre->getNom();
echo "\n";
$pierre->setPrixAbo();

echo "\n";

$henry = new Admin("Henry", "7777");
$henry->getNom();
echo "\n";
$henry->setPrixAbo();

echo "\n";

$henry = new CoAdmin("Eric", "787878");
$henry->getNom();
echo "\n";
$henry->setPrixAbo();

echo "\n";

?>