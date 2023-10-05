<?php

use Tutoriel\Tutoriel;
use Tutoriel\Table\Categorie;
use Tutoriel\Table\Article;

$title = 'Categorie';
//$favicon = '../images/favicon.png';
require_once '../modules/head.php';

$categorie = Categorie::find($_GET['id']);
if ($categorie === false) 
{
    Tutoriel::notFound();
}

$articles = Article::getArtByCatId($_GET['id']);
?>

<h1>Categorie</h1>


<div class="categorie--div">
    <div class="categorie--subdiv">
        <h2><?= htmlspecialchars($categorie->reference); ?></h2>

        <?php foreach($articles as $art): ?>
            <h3><?= htmlspecialchars($art->title); ?></h3>
            <p><?= htmlspecialchars($art->content); ?></p>
            <p><?= htmlspecialchars($art->date); ?></p>
            <hr />
        <?php endforeach; ?>
    </div>

    <div class="categorie--subdiv sec--categorie--div">
        <ul>
            <?php foreach(Categorie::allCategories() as $categorie): ?>
                <li class="li">
                    <a href="<?= htmlspecialchars($categorie->getUrlCat()); ?>" class="box--fontcolor">
                        <?= htmlspecialchars($categorie->reference); ?>
                    </a>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</div>

<div class="div--gohomesub">
    <p class="p--gohomesub"><a href="index.php?p=home">Go Home</a></p>
    <p class="p--gohomesub"><a href="index.php?p=form">Subscribe</a></p>
    <p class="p--gohomesub"><a href="index.php?p=contact">Contact</a></p>
</div>