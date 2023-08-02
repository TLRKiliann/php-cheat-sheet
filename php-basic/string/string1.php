<?php

// substr + strpos

$string = "Simple number to cut 2022-02-12";

$displayer = substr($string, 0, strpos($string, " 2022-02-12"));

print $displayer;

//return "Simple number to cut".

print "\n---\n";

// substr

$string_2 = "2022-02-12";

$displayer_2 = substr($string_2, 0, 7);

print $displayer_2;

//return "2022-02-12".

print "\n";

?>