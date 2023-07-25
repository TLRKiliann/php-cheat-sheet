<?php

class Admin extends User
{
	protected $ban;

	public function __construct($n, $p)
	{
		$this->user_name = $n;
		$this->user_pass = $p;
	}

	public function setBan($b)
	{
		$this->ban[] .= $b;
	}

	public function getBan()
	{
		echo "Banned by " . $this->user_name . " : ";
		foreach($this->ban as $value)
		{
			echo " " . $value;
		}
	}
}

?>