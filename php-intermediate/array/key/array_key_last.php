<?php

/*
function array_key_last(array $array) {
    // 100000 iters: ~0.068 secs
    return key(array_slice($array, -1));
    // 100000 iters: ~0.070 secs
    return key(array_reverse($array));
    // 100000 iters: ~0.088 secs
    return array_keys($array)[count($array) - 1] ?? null;
}
*/

$array = [
    "1", "Edma",
    "2", "Ralph"
];

print_r(($array)[count($array)-1]);

?>