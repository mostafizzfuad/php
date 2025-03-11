<?php
/* 
PHP has three different variable scopes:
-local
-global
-static
*/


// ==========  local scope ========== //
// A variable declared within a function has a LOCAL SCOPE and can only be accessed within that function.

// function helloTest()
// {
//     $age = 25; // local scope
//     echo "variable age inside function: $age";
// }
// helloTest(); // function call
// // using $age outside the function will generate an error
// echo "variable age outside function: $age"; // error

// function helloTest()
// {
//     global $age; // declare globally. now it will working outside the function
//     $age = 25;
//     echo "variable age inside function: $age";
// }
// helloTest(); // function call
// echo PHP_EOL;
// echo "variable age outside function: $age";  // now it’s working



// ==========  global scope ========== //
// A variable declared outside a function has a GLOBAL SCOPE and can only be accessed outside a function.

// $x = 10;  // globally declare variable
// function helloTest()
// {
//     echo "variable x inside function: $x";  // using x inside this function will generate an error
// }
// helloTest(); // function call
// echo "variable x outside function: $x"; // variable x outside function: 10


// ==========  global keyword ========== //
// The global keyword is used to access a global variable from within a function.
// To do this, use the global keyword before the variables ( inside the function ).

// $x = 10;  // globally declare variable
// function helloTest()
// {
//     global $x;
//     echo "variable x inside function: $x";  // now it’s working
// }
// helloTest(); // function call
// echo PHP_EOL;
// echo "variable x outside function: $x";


// $x = 5;
// $y = 10;
// function helloTest()
// {
//     global $x, $y;
//     $x += $y;
// }
// helloTest(); // function invoke
// echo $x; // 15


// $x = 5;
// $y = 10;
// function helloTest()
// {
//     $GLOBALS['x'] += $GLOBALS['y'];
// }
// helloTest(); // function invoke
// echo $x; // 15


// ==========  static keyword ========== //
// Normally, when a function is completed/executed, all of its variables are deleted. However, sometimes we want a local variable NOT to be deleted. We need it for a further job.

// **** don't using static keyword **** // 
// function helloTest()
// {
//     $x = 0;
//     echo $x . " ";
//     $x++;
// }
// helloTest();
// helloTest();
// helloTest();
// helloTest();
// 0 0 0 0

// **** using static keyword **** // 
// using static keyword
function helloTest()
{
    static $x = 0;
    echo $x . " ";
    $x++;
}
helloTest();
helloTest();
helloTest();
helloTest();
// 0 1 2 3

?>