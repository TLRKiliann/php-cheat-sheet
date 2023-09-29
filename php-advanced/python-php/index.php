<?php

$pyout = exec('python test.py');

?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
    </head>
    <body>
        
        <h1>php call a python script</h1>
        
        <div>
        <?php
            echo $pyout;
            echo "\n";
        ?>
        </div>

    </body>
</html