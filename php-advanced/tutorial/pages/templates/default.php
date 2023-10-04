<!DOCTYPE html>
<html lang="en">
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<!--li><a href="index.php?p=article">page 2</a></li-->
					<li><a href="index.php?p=form">Form</a></li>
					<li><a>No PAGE</a></li>
				</ul>
			</nav>
		</header>
		<main>
			<?= $content;?>
		</main>
		<footer>
			<nav>
				<ul>
					<li><a href="index.php?p=home">Home</a></li>
					<!--li><a href="index.php?p=article">page 2</a></li-->
					<li><a href="index.php?p=form">Form</a></li>
					<li><a>No PAGE</a></li>
				</ul>
			</nav>
		</footer>
	</body>
</html>