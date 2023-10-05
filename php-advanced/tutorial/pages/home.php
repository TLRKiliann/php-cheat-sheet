<?php
use Tutoriel\Table\Article;
use Tutoriel\Table\Categorie;

$title = 'Home';
require_once '../modules/head.php';

//$data = $db->query('SELECT firstname, lastname, age FROM members ORDER BY ID');
//var_dump($data[0]->firstname);

//foreach($db->query('SELECT * FROM articles','Tutoriel\Table\Article') as $post):
?>

<h1>Home</h1>

<div class="home--div">
    <div class="home--subdiv">
        <?php foreach(Article::getLast() as $post): ?>

            <div class="id--title">
                <p><?= htmlspecialchars($post->id) . ") ";?></p>
                <a href="<?= htmlspecialchars($post->getUrl()); ?>">
                    <?= htmlspecialchars($post->title); ?>
                </a>
            </div>
            
            <div class="div--boxtext">
                <p><?= htmlspecialchars($post->categorie); ?></p>
                <p><?= htmlspecialchars($post->date); ?></p>
                <?= $post->getExtract(); ?>
            </div>

            <hr />

        <?php endforeach; ?>
    </div>

    <div class="home--subdiv sec--div">
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
    <p class="p--gohomesub"><a href="index.php?p=form">Subscribe</a></p>
    <p class="p--gohomesub last--p"><a href="index.php?p=contact">Contact</a></p>
</div>