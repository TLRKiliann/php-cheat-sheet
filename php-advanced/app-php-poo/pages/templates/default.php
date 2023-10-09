<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta name="description" content="Web PHP POO tutorials">
		<meta name="author" content="koalatr33">
		<!--script src="https://cdn.tailwindcss.com"></script-->
		<link rel="stylesheet" type="text/css" href="/css/styles.css" />
		<link rel="shortcut icon" type="image/png" href="/images/favicon.png" />
		<title><?= Tutoriel\Tutoriel::getTitle(); ?></title>
	</head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<li><a href="index.php?p=login">Login</a></li>
					<li><a href="index.php?p=contact">Contact</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<div class="div--img">
				<img src="/images/anime_girl.jpg" width="100%" class="img--girl" alt="blue_girl"/>
			</div>
			<?= $content;?>
		</main>
		<footer>
			<nav>
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<li><a href="index.php?p=login">Login</a></li>
					<li><a href="index.php?p=contact">Contact</a></li>
				</ul>
			</nav>
		</footer>
	</body>
</html>