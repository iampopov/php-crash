<?php

/* ---- Conditionals & Operators ---- */

/* ------------ Operators ----------- */

/*
  < Less than
  > Greater than
  <= Less than or equal to
  >= Greater than or equal to
  == Equal to
  === Identical to
  != Not equal to
  !== Not identical to
*/

/* ---------- If & If-Else Statements --------- */

/*
** If Statement Syntax
if (condition) {
  // code to be executed if condition is true
}
*/
// $age = 20;
// if ($age >= 21) {
//     echo 'You can drink!';
// } else {
//     echo 'You can\'t drink!';
// }
// $t = date("H");
// echo "<p>The hour (of the server) is " . $t;
// if ($t < "20") {
//     echo "Have a good day!";
// } elseif ($t < "17") {
//     echo "Have a good afternoon!";
// } else {
//     echo "Have a good night!";
// }

$posts = ['first post', 'second post', 'third post'];

// if (empty($posts)) {
//     echo 'There are no posts';
// } else {
//     echo 'There are posts';
// }


/* -------- Ternary Operator -------- */
/*
  The ternary operator is a shorthand if statement.
  Ternary Syntax:
    condition ? true : false;
*/

//echo !empty($posts) ? $posts[0] : 'There are no posts';
// $fistPost = !empty($posts) ? $posts[0] : 'There are no posts';

// $fistPost = $posts[0] ?? 'There are no posts';

// echo $fistPost;

/* -------- Switch Statements ------- */

$favcolor = 'orange';

switch ($favcolor) {
    case 'red':
        echo 'Your favorite color is red';
        break;

    case 'blue':
        echo 'Your favorite color is blue';
        break;

    case 'green':
        echo 'Your favorite color is green';
        break;

    default:
        echo 'Your favorite color is not red, blue, or green';
        break;
}
