<?php

use Tutoriel\Tutoriel;

$title = 'Article';
//$favicon = '../images/favicon.png';
require_once '../modules/head.php';

//$post = $db->query('SELECT * FROM members WHERE id = ?', $_GET['id'], 'Tutoriel\Table\Article', true);
//$post = $db->prepare('SELECT * FROM articles WHERE id = ?', [$_GET['id']], 'Tutoriel\Table\Article', true);
$post = Tutoriel::getDatabase()->prepare('SELECT * FROM articles WHERE id = ?', 
    [$_GET['id']], 'Tutoriel\Table\Article', true);
    
if ($post === false) 
{
    Tutoriel::notFound();
}
?>

<h1>Article</h1>

<div class="div--article">
    <h2><?= htmlspecialchars($post->title); ?></h2>

    <p class="p--content"><?= htmlspecialchars($post->content); ?></p>
    <p class="p--date"><?= htmlspecialchars($post->date); ?></p>

    <p class="p--gohomesub"><a href="index.php?p=home">Go Home</a></p>
    <p class="p--gohomesub"><a href="index.php?p=form">Subscribe</a></p>
    <p class="p--gohomesub"><a href="index.php?p=contact">Contact</a></p>
</div>