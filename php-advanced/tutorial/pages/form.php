<?php

$title = 'Form Page';
//$favicon = '../images/favicon.png';
require_once '../modules/head.php';

/*
// run but is it good ???
use Tutoriel\BootstrapForm;
use Tutoriel\Form;

$form = new BootstrapForm($_GET);
*/

?>

<h1>Form Page</h1>

	<form action="" method="get">
		
		<?php
		
		echo $form->label('Username');
		echo $form->input('username');
		echo $form->label('Name');
		echo $form->input('name');
		echo $form->label('Password');
		echo $form->input('password');
		echo $form->submit();
		
		?>

	</form>

<p class="p"><a href="index.php?p=home">Go Home</a></p>