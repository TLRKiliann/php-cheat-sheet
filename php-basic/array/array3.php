<?php

$array_1 = [11,22,33];

$array_2 = ["Hello", "good", "yes"];

$newArr = array_combine($array_1, $array_2);

print_r($newArr);

//---


$array_3 = [11, 22, 33];

$array_4 = ["Hello", "good", "yes"];

array_push($array_4, $array_3);

print_r($array_4);

//---

/*
array_push_before
array_push_after
*/

$src = array("A", "B", "C");
$in = array("D", "E");

var_dump(array_push_before($src, $in, 1));
/* array_push_before, no-key array
array(5) {
  [0]=>
  string(1) "A"
  [1]=>
  string(1) "D"
  [2]=>
  string(1) "E"
  [3]=>
  string(1) "B"
  [4]=>
  string(1) "C"
}*/

var_dump(array_push_after($src, $in, 1));
/* array_push_after, no-key array
array(5) {
  [0]=>
  string(1) "A"
  [1]=>
  string(1) "B"
  [2]=>
  string(1) "D"
  [3]=>
  string(1) "E"
  [4]=>
  string(1) "C"
}*/

?>