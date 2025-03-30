<?php 
// ==========  for loop  ========== //
// Write a program that displays “Hello World!” 10 times 
for ($i = 0; $i < 10; $i++) 
{
    echo "Hello World! \n";
}


// Write a program that displays the first 20 integer numbers
for ($i = 1; $i <= 20; $i++)
{
    echo $i . "\n";
}


// Write a program that displays  1-10 odd numbers  ?
// system 1
for ($i = 1; $i < 10; $i+=2)
{
    echo $i . "\n";
}

// system 2
for ($i = 1; $i < 10; $i++)
{
    // if ($i % 2 != 0)
    if ($i % 2 == 1)
    {
        echo $i . "\n";
    }
}

// System 3
for ($i = 0; $i < 10; $i++)
{
    // if ($i % 2 != 1)
    if ($i % 2 == 0)
    {
        echo $i + 1 . "\n";
    }
}

// System 4
for ($i = 1; $i < 10; $i++)
{
    // if ($i % 2 != 1)
    if ($i % 2 == 0)
    {
        continue;
    }
    echo $i . "\n";
}


// Write a program that displays  1-10 even numbers 
for ($i = 2; $i <= 10; $i+=2)
{
    echo $i . "\n";
}


// Write a program in PHP to display Multiples of 5 between 1 and 20
for ($i = 1; $i <= 20; $i++)
{
    if ($i % 5 == 0)
    {
        echo $i . "\n";
    }
}

// Another Way
for ($i = 5; $i <= 20; $i+=5)
{
    echo $i . "\n";
}


// Multiplication table
/*
3 X 1 = 3
3 X 2 = 6
3 X 3 = 9
3 X 4 = 12
3 X 5 = 15
3 X 6 = 18
3 X 7 = 21
3 X 8 = 24
3 X 9 = 27
3 X 10 = 30
*/

$n = 3;
for ($i = 1; $i <= 10; $i++) 
{
    echo "$n X $i = " . $n * $i . "\n";
}


// Iterate array elements using for loop
$arr = [10 , 20, 30, 40];

for ($i = 0; $i < count($arr); $i++) 
{
    echo $arr[$i] . " ";
}


// Multiple initialization and iterator expressions
for ($i = 1, $j = 5; $j <= 20; $i++, $j+=5)
{
    echo "i = " . $i . " , j = " . $j . "\n";
}

// i = 1 , j = 5
// i = 2 , j = 10
// i = 3 , j = 15
// i = 4 , j = 20


// Without initialization and iterator statement
$i = 1;
for (; $i <= 5;)
{
    echo $i . "\n";
    $i++;
}


// ==========  Infinite for loop  ========== //
/*
for ($i = 1; $i > 0; $i++)
{
    echo $i . "\n";
}
*/

for (; ; )
{
    // body of for loop
}

/*
for (initialization; ; iterator)
{
    // body of for loop
}
*/


// ==========  while loop  ========== //
// Write a program that displays the first 10 integer numbers ?
/*
$i = 1;
while ($i <= 10)
{
    echo $i . "\n";
    $i++;
}
*/

// another syntax
/*
$i = 1;
while ($i <= 5):
    echo $i . "\n";
    $i++;
endwhile;
*/


// ==========  Infinite while loop  ========== //
while (true)
{
    // body of while loop
}

while (1)
{
    // body of while loop
}



// ==========  do...while loop  ========== //
$i = 1;
do {
    echo $i . "\n";
    $i++;
} while ($i <= 10);


// Infinite do...while loop
do
{
    // body of while loop
} while (true);

do
{
    // body of while loop
} while (1);



// ==========  foreach loop  ========== //
// The foreach loop through a block of code for each element in an array or each property in an object.

// Syntax for Indexed Array
foreach ($array as $item)
{
    // loop body
}

$friends = array("Bappy", "Walid", "Rifat", "Shuvo");
foreach ($friends as $friend)
{
    echo "$friend \n";
}


// Syntax for Associative Array
foreach ($array as $key => $value)
{
    // loop body
}

$friends = array("Bappy" => 25, "Walid" => 34, "Rifat" => 21);
foreach ($friends as $friendName => $friendAge)
{
    echo "$friendName : $friendAge \n";
}


// Syntax for Object
class ClassName
{
    // property
    // method
}

$object = new ClassName();

foreach ($object as $propertyName => $propertyValue)
{
    echo "$propertyName: $propertyValue \n";
}

// Example
class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }
}

$myCar = new Car("red", "BMW");

foreach ($myCar as $propertyName => $propertyValue)
{
    echo "$propertyName: $propertyValue \n";
}



// ==========  Foreach Byref  ========== //
// By default, changing an array item will not affect the original array.
$friends = array("Bappy", "Walid", "Rifat", "Shuvo");
foreach ($friends as $friend)
{
    if ($friend == "Walid") $friend = "Fahim";
}

var_dump($friends);

/*
array(4) {
  [0]=>
  string(5) "Bappy"
  [1]=>
  string(5) "Walid"
  [2]=>
  string(5) "Rifat"
  [3]=>
  string(5) "Shuvo"
}
*/

// BUT, by using the & character in the foreach declaration, the array item is assigned by reference, which results in any changes done to the array item will also be done to the original array.
$friends = array("Bappy", "Walid", "Rifat", "Shuvo");
foreach ($friends as &$friend)
{
    if ($friend == "Walid") $friend = "Fahim";
}

var_dump($friends);

/*
array(4) {
  [0]=>
  string(5) "Bappy"
  [1]=>
  string(5) "Fahim"
  [2]=>
  string(5) "Rifat"
  [3]=>
  &string(5) "Shuvo"
}
*/


// ==========  Foreach Alternative Syntax  ========== //
foreach ($array as $item):
    // loop body
endforeach;

// Example
$friends = array("Bappy", "Walid", "Rifat", "Shuvo");
foreach ($friends as &$friend):
    echo "$friend \n";
endforeach;


// ==========  Nested Loop  ========== //
// Example: Square Pattern Design
/*
* * * * *
* * * * *
* * * * *
* * * * *
* * * * *
*/

$n = 5;
for ($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $n; $j++)
    {
        echo "* ";
    }
    echo "\n";
}


// Example: Triangle Pattern Design
/*
1
1 2
1 2 3
1 2 3 4
1 2 3 4 5
*/

$n = 5;
for ($i = 1; $i <= $n; $i++)
{
    for ($j = 1; $j <= $i; $j++)
    {
        echo "$j ";
        // echo "* ";
    }
    echo "\n";
}



/*
1
2 1
3 2 1
4 3 2 1
5 4 3 2 1
*/

$row = 5;
for ($i = 1; $i <= $row; $i++) {
    for ($j = $i; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo "\n";
}



/*
5 4 3 2 1
4 3 2 1
3 2 1
2 1
1
*/

$row = 5;
for ($i = $row; $i >= 1; $i--) {
    for ($j = $i; $j >= 1; $j--) {
        echo $j . " ";
    }
    echo "\n";
}



// Example: Pyramid Pattern Design


/*
        1
      2 1 2
    3 2 1 2 3
  4 3 2 1 2 3 4
5 4 3 2 1 2 3 4 5

*/

$row = 5;
for ($i = 1; $i <= $row; $i++) {
    // space
    for ($j = 1; $j <= $row - $i; $j++) {
        echo " " . " ";
    }
    // left
    for ($j = $i; $j >= 1; $j--) {
        echo $j . " ";
    }
    // right
    for ($j = 2; $j <= $i; $j++) {
        echo $j . " ";
    }
    echo "\n";
}



// ==========  break and continue statement  ========== //
/*
for ($i = 1; $i < 20; $i++) {
    if ($i % 3 == 0) {
        continue; // skip the below statements
    }

    echo $i . " ";

    if ($i == 10) {
        break; // loop terminate
    }
}
*/
// 1 2 4 5 7 8 10