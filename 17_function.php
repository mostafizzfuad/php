<?php 
// A function is a block of code that performs a specific task.

// Syntax
function function_name()
{
    // function body
}
function_name(); // function call / invoke


// Example
function my_message()
{
    echo "Hello PHP !!";
}
my_message();



// ==========  Argument & Parameter  ========== //
function familyInfo($fname, $year) // parameter
{
    echo "$fname Rahman. Born in $year \n";
}

familyInfo("Mostafizur", "1998"); // arguments
familyInfo("Musfiqur", "2006"); // arguments



// ==========  Default Argument  ========== //
// If we call the function setHeight() without arguments it takes the default value as argument.

function setHeight($minheight = 50)
{
    echo "The height is : $minheight \n";
}

setHeight(350);
setHeight(); // will use the default value of 50
setHeight(133);


// Example 2
function divide($num1, $num2 = 1)
{
    $result = $num1 / $num2;
    return $result;
}

$number1 = 20;
$number2 = 4;

$final_result = divide($number1);
echo $final_result; // 20



// ==========  Return values  ========== //
function sum($x, $y)
{
    return $x + $y;
}

$result = sum(10, 20);
echo $result; // 30


// Example 2
function sum2($x, $y)
{
    return $x + $y;
}

$num1 = 10;
$num2 = 20;

$result = sum2($num1, $num2);
echo $result; // 30


echo "\n";

// ==========  Passing Arguments by Reference  ========== //
// In PHP, arguments are usually passed by value, which means that a copy of the value is used in the function and the variable that was passed into the function cannot be changed.

function add_five($value)
{
    $value += 5;
    // echo $value; // 7
}

$num = 2;
add_five($num);
echo $num; // 2


// When a function argument is passed by reference, the & operator is used:
function add_five2(&$value)
{
    $value += 5;
}

$num = 2;
add_five2($num);
echo $num; // 7



// ==========  Variable Number of Arguments (...)  ========== //
// Sum of many numbers using variadic function
function sumMyNumbers(...$arr)
{
    $sum = 0;
    for ($i = 0; $i < count($arr); $i++) {
        $sum += $arr[$i];
    }
    return $sum;
}

$result = sumMyNumbers(5, 2, 6, 2, 7, 4);
echo $result; // 26



// The variadic argument must be the last argument
function myFamily($lastName, ...$firstName)
{
    $str = "";
    for ($i = 0; $i < count($firstName); $i++) {
        $str = $str . "Hi, $firstName[$i] $lastName. \n";
    }
    return $str;
}

$result = myFamily("Rahman", "Mostafizur", "Musfiqur", "Tawhidur");
echo $result;

// Hi, Mostafizur Rahman.
// Hi, Musfiqur Rahman.
// Hi, Tawhidur Rahman.


// Example 2
function myFamily2($lastName, $address, ...$firstName)
{
    $str = "";
    for ($i = 0; $i < count($firstName); $i++) {
        $str = $str . "Hi, $firstName[$i] $lastName. Address: $address \n";
    }
    return $str;
}

$result = myFamily2("Rahman", "Dhaka 1216", "Mostafizur", "Musfiqur", "Tawhidur");
echo $result;

// Hi, Mostafizur Rahman. Address: Dhaka 1216
// Hi, Musfiqur Rahman. Address: Dhaka 1216
// Hi, Tawhidur Rahman. Address: Dhaka 1216



// ==========  strict  ========== //
// since strict is NOT enabled "5" is changed to int(5) and it will return 10.

// declare(strict_types = 1); // strict requirement
// function addNumbers(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers(5, "5"); // 10



// since strict is enabled and "5" is not an integer, an error will be thrown.

// declare(strict_types = 1); // strict requirement
// function addNumbers2(int $a, int $b)
// {
//     return $a + $b;
// }
// echo addNumbers2(5, "5"); // error, because can't pass string argument




// ==========  Return Type Declarations  ========== //
declare(strict_types = 1); // strict requirement
function addNumbers(float $a, float $b): float
{
    return ($a + $b);
}
echo addNumbers(1.2, 5.2); // 6.4


// We can specify a different return type:
function addNumbers2(float $a, float $b): int
{
    return (int)($a + $b);
}
echo addNumbers2(1.2, 5.2); // 6



?>