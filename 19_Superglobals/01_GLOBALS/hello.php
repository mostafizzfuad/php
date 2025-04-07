<?php 
// Some predefined variables in PHP are "superglobals", which means that they are always accessible, regardless of scope - and we can access them from any function, class or file without having to do anything special.
// These are built-in variables that are always available in all scope.

/*
The PHP superglobal variables are:
    $GLOBALS
    $_SERVER
    $_REQUEST
    $_POST
    $_GET
    $_FILES
    $_ENV
    $_COOKIE
    $_SESSION
*/


// $GLOBALS :
// $GLOBALS is an array that contains all global variables.

// #Create Function using normal variables
// function add($number1, $number2)
// {
//     $sum = $number1 + $number2;
//     return $sum;
// }

// $number1 = 100;
// $number2 = 50;

// $result = add($number1, $number2);
// echo $result; // 150


// new term : variable scope
// Create Function using globals variables
function add()
{
    $sum = $GLOBALS['number1'] + $GLOBALS['number2'];
    return $sum;
}

// $number1 = 100;
// $number2 = 50;

$GLOBALS['number1'] = 100;
$GLOBALS['number2'] = 50;

$result = add();
echo $result; // 150


// ==========  example 2  ========== //
/*
function myfunction()
{
    // echo $x; // cannot access
    echo $GLOBALS['x']; // 75

    // global $x;
    // echo $x;
}

$x = 75;
myfunction();
*/



// ==========  example 3  ========== //
/*
function myfunction()
{
    $GLOBALS['x'] = 100;
}

myfunction();

echo $GLOBALS['x']; // 100
echo $x; // 100
*/



// ==========  example 4  ========== //
/*
function myfunction()
{
    $GLOBALS['x'] = 100;
}

// myfunction();

echo $GLOBALS['x']; // Undefined variable $x
echo $x; // Undefined variable $x
*/


// ==========  define using global keyword  ========== //
function myfunction()
{
    global $x;
    echo $x; // 75
}

$x = 75;
myfunction();


?>