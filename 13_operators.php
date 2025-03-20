<?php 
/*
// ==========  Arithmetic Operators  ========== //
    + (Addition)
    - (Subtraction)
    * (Multiplication)
    / (division)
    % (Modulus)
    ** (Exponentiation )



// ==========  Assignment Operators  ========== //
    =
    +=
    -=
    *=
    /=
    %=


    
// ==========  Comparison Operators  ========== //
    ==
    != 
    <>
    ===
    ==!
    >
    <
    >=
    <=
    <=>

*/


echo (55 == "55"); // 1
echo (55 != "55"); // 
// echo (55 <> "55"); // 
echo (55 === "55"); // 
echo (55 !== "55"); // 1

echo (55 > 50); // 1
echo (55 < 50); // 
echo (55 >= 55); // 1
echo (55 <= 55); // 1

echo "\n";

echo (55 <=> 50); // 1 (because, x > y)
echo (50 <=> 55); // -1 (because, x < y)
echo (55 <=> 55); // 0 (because, x == y)


/*
// ==========  Increment/Decrement Operators  ========== //
    +
    -
    ++
    --



// ==========  Logical Operators  ========== //
    ||    or
    &&    and
    !
    xor
*/

// Logical OR (||)
echo(true || true); // 1
echo(true || false); // 1
echo(false || true); // 1
echo(false || false); //

// Logical AND (&&)
echo(true && true); // 1
echo(true && false); //
echo(false && true); //
echo(false && false); //

// Logical NOT (!)
echo(!true); //
echo(!false); // 1

// Logical XOR (xor)
echo (true xor true); //
echo (false xor false); //
echo (false xor true); // 1
echo (true xor false); // 1



/*
// ==========  String Operators  ========== //
    .
    .=

*/

$txt1 = "Hello ";
$txt2 = "PHP !!";
echo $txt1 . $txt2; // Hello PHP !!

$txt1 .= $txt2; // $txt1 = $txt1 . $txt2;
echo $txt1; // Hello PHP !!



/*
// ==========  Array Operators  ========== //
    +   Union
    ==  Equality
    === Identity
    !=  Inequality
    <>  Inequality
    !== Non-identity

*/

// ==========  Union (+)  ========== //
$x = array("a" => "HTML", "b" => "CSS");  // Associative Array
$y = array("c" => "JS", "d" => "PHP");  // Associative Array

print_r($x + $y);

/*
Array
(
    [a] => HTML
    [b] => CSS
    [c] => JS
    [d] => PHP
)
*/



$x = array("html", "css"); // indexed array
$y = array("js", "php"); // indexed array

print_r($x + $y);

/*
Array
(
    [0] => html
    [1] => css
)
*/



$x = array("html", "css"); // indexed array
$y = array("html", "js", "php"); // indexed array

print_r($x + $y);

/*
Array
(
    [0] => html
    [1] => css
    [2] => php
)
*/



// ==========  Equality (==)  ========== //
// Returns true if $x and $y have the same key/value pairs.

$x = array("a" => "HTML", "b" => "CSS");  // Associative Array
$y = array("c" => "JS", "d" => "PHP");  // Associative Array
var_dump($x == $y); // bool(false)


$x = array("a" => "HTML", "b" => "CSS");  // Associative Array
$y = array("a" => "HTML", "b" => "CSS");  // Associative Array
var_dump($x == $y); // bool(true)


$x = array("0" => "HTML", "1" => "CSS");  // Associative Array
$y = array("HTML", "CSS");  // Indexed Array
var_dump($x == $y); // bool(true)


$x = array("a" => "HTML", "b" => "CSS");  // Associative Array
$y = array("b" => "CSS", "a" => "HTML");  // Associative Array
var_dump($x == $y); // bool(true)



// ==========  Identity (===)  ========== //
// Returns true if $x and $y have the same key/value pairs in the same order and of the same types.

$x = array("a" => "HTML", "b" => "CSS");  // Associative Array
$y = array("b" => "CSS", "a" => "HTML");  // Associative Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)


$x = array("a" => 10, "b" => 20);  // Associative Array
$y = array("a" => "10", "b" => "20");  // Associative Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)


$x = array(10, 20);  // Indexed Array
$y = array("10", "20");  // Indexed Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)


$x = array("0" => "HTML", "1" => "CSS");  // Associative Array
$y = array("HTML", "CSS");  // Indexed Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(true)



// ==========  Inequality (!= , <>)  ========== //
// Returns true if $x is not equal to $y

$x = array("0" => "HTML", "1" => "CSS");  // Associative Array
$y = array("HTML", "CSS");  // Indexed Array
var_dump($x == $y); // bool(true)
var_dump($x != $y); // bool(false)
var_dump($x <> $y); // bool(false)



// ==========  Non-identity (!==)  ========== //
// Returns true if $x is not identical to $y

$x = array("1" => "CSS", "0" => "HTML");  // Associative Array
$y = array("HTML", "CSS");  // Index Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(false)
var_dump($x !== $y); // bool(true)


$x = array("0" => "HTML", "1" => "CSS");  // Associative Array
$y = array("HTML", "CSS");  // Index Array
var_dump($x == $y); // bool(true)
var_dump($x === $y); // bool(true)
var_dump($x !== $y); // bool(false)



/*
// ==========  Conditional Assignment Operators  ========== //
    ?:  ternary
    ??  Null coalescing
*/


// ==========  ternary (?:)  ========== //
// (boolean_expression) ? execute (bool_exp true)  :  execute (bool_exp false)

// large between two numbers
$num1 = 15000;
$num2 = 18000;
$largeNumber = ($num1 > $num2) ? $num1 : $num2;
echo $largeNumber; // 18000

// large between three numbers
$num1 = 5000;
$num2 = 8000;
$num3 = 9000;
$largeNumber = ($num1 > $num2) ? $num1 : (($num2 > $num3) ? $num2 : $num3);
echo $largeNumber; // 9000


// ==========  null coalescing (??)  ========== //
// Example 1
$studentMark = 45; // if studentMark is not exist or null ==> print 33
$defaultAutoPassMark = 33;

// if user input studentMark is given & not null, then print studentMark ; otherwise print default
$result = $studentMark ?? $defaultAutoPassMark;

echo $result; // 45, because studentMark exist



// Example 2
$studentMark = null; // if studentMark is not exist or null ==> print 33
$defaultAutoPassMark = 33;

// if user input studentMark is given & not null, then print studentMark ; otherwise print default
$result = $studentMark ?? $defaultAutoPassMark;

echo $result; // 33, because studentMark is null



// Example 3
// $studentMark = 45; // if studentMark is not exist or null ==> print 33
$defaultAutoPassMark = 33;

// if user input studentMark is given, then print studentMark ; otherwise print default
$result = $studentMark ?? $defaultAutoPassMark;

echo $result; // 33, because studentMark not exist
?>