<?php

$myTime = 'Now: ' . date("H:i:s");
echo $myTime;

echo "\n --- \n";

$date = date('Format String', time());
echo $date;

echo "\n --- \n";

$getDefaultDate = date_default_timezone_get();
echo $getDefaultDate;

echo "\n --- \n";

$setDefaultDate = date_default_timezone_set('Europe/London');
echo $setDefaultDate;

?>