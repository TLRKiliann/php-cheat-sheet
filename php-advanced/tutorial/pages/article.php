<?php

$title = 'Article Page';
//$favicon = '../images/favicon.png';
require_once '../modules/head.php';

//$post = $db->query('SELECT * FROM members WHERE id = ?', $_GET['id'], 'Tutoriel\Table\Article', true);
//$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'Tutoriel\Table\Article', true);
$post = Tutoriel\Tutoriel::getDatabase()->prepare('SELECT * FROM articles WHERE id = ?', 
    [$_GET['id']], 'Tutoriel\Table\Article', true);

?>

<h1>Article Page</h1>

<h4 class="p"><?= htmlspecialchars($post->title); ?></h4>
<p class="p"><?= htmlspecialchars($post->content); ?></p>

<p class="p"><a href="index.php?p=home">Go Home</a></p>
<p class="p"><a href="index.php?p=form">Subscribe</a></p>