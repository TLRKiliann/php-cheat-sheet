<?php

$title = 'Subscription';
//$favicon = '../images/favicon.png';
require_once '../modules/head.php';

?>

<h1>Form Page</h1>

<div class="div--form">

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

	<p class="p--gohomesub"><a href="index.php?p=home">Go Home</a></p>
	<p class="p--gohomesub"><a href="index.php?p=contact">Contact</a></p>
</div>