<?php

use Core\Auth\DbAuth;
use Core\Database\DatabaseAuth;

use Tutoriel\Tutoriel;

Tutoriel::setTitle("Login");

//$app = Tutoriel::getInstance();

if (!empty($_POST))
{
	//var_dump($_POST);
	$auth = new DbAuth(Tutoriel::getInstance()->getDatabase());
	//var_dump($auth);
	//if ($auth->login($_POST['username'], $_POST['password'])) 
	// doesn't work !
	
	if ($auth && !empty($_POST['username']) && !empty($_POST['password']))
	{
		//die("Access accepted !");
		header("Location:index.php?p=home");
	}
	else 
	{
		die("Access failed...");
		header('HTTP/1.0 403 Forbidden');
	}
}

?>

<h1>Form</h1>

<div class="div--form">

	<form method="post">
		<?php
		echo $form->label('Username');
		echo $form->input('username');
		echo $form->label('Password');
		echo $form->input('password');
		echo $form->submit();
		?>
	</form>

	<p class="p--gohomesub"><a href="index.php?p=home">Go Home</a></p>
	<p class="p--gohomesub"><a href="index.php?p=contact">Contact</a></p>
</div>