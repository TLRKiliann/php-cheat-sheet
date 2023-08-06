<?php

$StartTime = microtime(1);

echo '<div style="display:none">';

for ($i=0; $i<100000; $i++)
    echo "Hello world!<br />";

echo "</div>Echo: " . round(microtime(1)-$StartTime, 5);

// comment or uncomment code above or below.

$StartTime = microtime(1);

echo '<div style="display:none">';
for ($i=0; $i<100000; $i++)
    print "Hello world!<br />";

echo "</div><br />Print: " . round(microtime(1)-$StartTime, 5);

// echo is faster than print

?>