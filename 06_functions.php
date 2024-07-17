<?php
/* ------------ Functions ----------- */

/*
  Functions are reusable blocks of code that we can call to perform a specific task.
  We can pass values into functions to change their behavior. Functions have their own local scope as opposed to global scope


/*
** Function Syntax
  function functionName($arg1, $arg2, ...) {
    // code to be executed
  }
*/

function registeredUser($email)
{
    echo $email . ' User Registered';
}

// registeredUser('brad2222@gmail.com');


function sum($num1, $num2)
{
    return $num1 + $num2;
}

$number = sum(4, 5);

// echo $number;


$multiply = fn ($num1, $num2) => $num1 * $num2;

echo $multiply(4, 5);
