<?php

use Tutoriel\Tutoriel;

//use Tutoriel\Table\Article;

$article = Tutoriel::getDatabase()->prepare('SELECT * FROM articles WHERE id = ?', 
    [$_GET['id']], 'Tutoriel\Table\Article', true);
//$article = Article::allArticles($_GET['id']);

    
if ($article === false) 
{
    Tutoriel::notFound();
}

Tutoriel::setTitle($article->title);

?>

<h1>Article</h1>

<div class="div--article">
    <h2><?= htmlspecialchars($article->title); ?></h2>

    <p class="p--content"><?= htmlspecialchars($article->content); ?></p>
    <p class="p--date"><?= htmlspecialchars($article->date); ?></p>

    <p class="p--gohomesub"><a href="index.php?p=home">Go Home</a></p>
    <p class="p--gohomesub"><a href="index.php?p=login">Login</a></p>
    <p class="p--gohomesub"><a href="index.php?p=contact">Contact</a></p>
</div>