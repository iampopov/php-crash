<?php
// echo "Hello World1!!";
/* -------- Loops & Iteration ------- */

/* ------------ For Loop ------------ */

/*
** For Loop Syntax
  for (initialize; condition; increment) {
  // code to be executed
  }
*/
// for ($x = 5; $x <= 9; $x++) {
//     echo "The number is: $x <br>";
// }

/* ------------ While Loop ------------ */

/*
** While Loop Syntax
  while (condition) {
  // code to be executed
  }
*/
// $x = 1;

// while ($x <= 5) {
//     echo "The number is: $x <br>";
//     $x++;
// }

/* ---------- Do While Loop --------- */

/*
** Do While Loop Syntax
  do {
  // code to be executed
  } while (condition);

do...while loop will always execute the block of code once, even if the condition is false.
*/
// $x = 1;
// do {
//     # code...
//     echo "The number is: $x <br>";
//     $x++;
// } while ($x <= 9);


/* ---------- Foreach Loop ---------- */

/*
** Foreach Loop Syntax
  foreach ($array as $value) {
  // code to be executed
  }
*/

// $posts = ['first post', 'second post', 'third post'];

// for ($x = 0; $x < count($posts); $x++) {
//     echo $posts[$x] . '<br>';
// }

// foreach ($posts as $i => $post) {
//     # code...
//     echo $i + 1 . ' - ' . $post . '<br>';
// }

$person = [
    'name' => 'Brad',
    'last_name' => 'Traversy',
    'age' => 30,
    'email' => 'brad@gmail.com',
    // 'hobbies' => ['Tennis', 'Video Games'],
];

foreach ($person as $key => $value) {
    # code...
    echo $key . ' ' . $value . '<br>';
    // if (is_array($value)) {
    //     echo $key . ' ' . implode(', ', $value) . '<br>';
    // } else {
    //     echo $key . ' ' . $value . '<br>';
    // }
}
