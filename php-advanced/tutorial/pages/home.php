<?php

$title = 'Home Page';
require_once '../modules/head.php';

//$data = $db->query('SELECT firstname, lastname, age FROM members ORDER BY ID');
//var_dump($data[0]->firstname);

//foreach($db->query('SELECT * FROM members', 'Tutoriel\Table\Article') as $post);
 
?>

<h1>Home Page</h1>

<?php 
//foreach($db->query('SELECT * FROM articles','Tutoriel\Table\Article') as $post): 
foreach(Tutoriel\Table\Article::getLast() as $post): 
?>

    <h4><a href="<?= htmlspecialchars($post->getUrl()); ?>"><?= htmlspecialchars($post->title); ?></a>
    <?= htmlspecialchars($post->categorie); ?></h4>
    
    <?php
    /*
    print_r($_SERVER['REQUEST_URI']);
    echo " - ";
    print_r($_SERVER['QUERY_STRING']);
    */
    ?>

    <!-- access displayed p class="p--data"><?/*echo htmlspecialchars($post->getExtract()); */?></p-->
    <div class="p--suite"><?= $post->getExtract(); ?></div>

<?php endforeach; ?>

<p class="p"><a href="index.php?p=single">Go Single</a></p>
<p class="p"><a href="index.php?p=form">Subscribe</a></p>

<!--div class="data--div">
    <div class="subdata--div">
        <h4>Firstname</h4>
        <p>
        <?php
        /*
        foreach($arrayConvert = $data as $key => $value)
        {
            echo "<p>" . htmlspecialchars($value['firstname']) . "</p>";
        }
        */
        ?>
        </p>
    </div>

    <div class="subdata--div">
        <h4>Lastname</h4>
        <p>
        <?php
        /*
        foreach($arrayConvert = $data as $key => $value)
        {
            echo "<p>" . htmlspecialchars($value['lastname']) . "</p>";
        }
        */
        ?>
        </p>
    </div>

    <div class="subdata--div">
        <h4>Age</h4>
        <p>
        <?php
        /*
        foreach($arrayConvert = $data as $key => $value)
        {
            echo "<p>" . htmlspecialchars($value['age']) . "</p>";
        }
        */
        ?>
        </p>
    </div>
</div-->
