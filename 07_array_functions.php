<?php
/* --------- Array Functions -------- */

/*
  Functions to work with arrays
  https://www.php.net/manual/en/ref.array.php
*/

$fruits = ['Apple', 'Banana', 'Orange', 'Mango'];

// echo count($fruits); // 4

// var_dump(in_array('Apple', $fruits)); // true

array_push($fruits, 'Peach', 'Pineapple');

array_unshift($fruits, 'Watermelon');

//remove

// array_pop($fruits);

// array_shift($fruits);

unset($fruits[1]);

$chunked_array = array_chunk($fruits, 4);

print_r($chunked_array);

// print_r($fruits);
