<?php
// In programming, a variable is a container (storage area) to hold data.
// A variable is a named memory location which temporarily stores data that can change while the program is running.


$varibaleName; // camelCase formatted name
$varibale_name; // underscore formatted name

$name = "Mostafizur"; // string
$age = 30; // integer
$isEmployed = true; // boolean


// #Example: Sum of two numbers
$x = 5;
$y = 10.5;
echo $x + $y; // 15.5



// ========== PHP is a Loosely Typed Language ========== //
// In the example above, notice that we did not have to tell PHP which data type the variable is.
// PHP automatically associates a data type to the variable, depending on its value.

$something = 10;
var_dump($something); // int(10)

$something = "Hello"; // re-assign
var_dump($something); // string(5) "Hello"
// var_dump() function returns the data type and the value



// ==========  assign multiple values ========== //
$x = $y = $z = "Mostafizur ";
echo $x, $y, $z;

?>