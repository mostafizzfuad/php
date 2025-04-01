<?php 
// An array stores multiple values in one single variable.

// // Indexed array
// $friends = array("Bappy", "Rifat", "Walid");
// $friends2 = ["Bappy", "Rifat", "Walid"];

// $ages = array(25, 30, 17);
// $ages2 = [25, 30, 17];

// // Associative array
// $friendsInfo = array(
//     "Bappy" => 25,
//     "Rifat" => 30,
//     "Walid" => 17
// );

// $friendsInfo2 = [
//     "Bappy" => 25,
//     "Rifat" => 30,
//     "Walid" => 17
// ];

// print_r($friends);
// print_r($friends2);
// print_r($ages);
// print_r($ages2);
// print_r($friendsInfo);
// print_r($friendsInfo2);



// ==========  Array Items  ========== //
// Array items can be of any data type.
// The most common are strings and numbers (int, float), but array items can also be objects, functions or even arrays.
// We can have different data types in the same array.

// define the function
// function myFunction()
// {
//     echo "This text comes from a function";
// }

// // create an array
// $myArr = array("Volvo", 15, ["apples", "bananas"], 'myFunction');

// // calling the function from the array item:
// $myArr[3](); // This text comes from a function
// echo $myArr[2][1]; // bananas



// ==========  Indexed Array  ========== //
// In indexed arrays each item has an index number.
// By default, the first item has index 0, the second item has item 1, etc.


// operations of indexed array
// $friends = array("Bappy", "Rifat", "Walid", "Shuvo");
// $friends2 = ["Bappy", "Rifat", "Walid", "Shuvo"]; // We can also use a shorter syntax by using the [] brackets

// // access array element by index number
// echo $friends[0]; // Bappy
// echo $friends[2]; // Walid

// // length of an array
// echo count($friends); // 4

// // access last element of an array
// echo $friends[count($friends) - 1]; // Shuvo

// // re-assign array elements
// echo $friends[2]; // Walid [before re-assign]
// $friends[2] = "Fahim";
// echo $friends[2]; // Fahim [after re-assign]


// traverse of indexed array
// $friends = array("Bappy", "Rifat", "Walid", "Shuvo");

// // traverse through for loop
// for ($i = 0; $i < count($friends); $i++)
// {
//     echo "$friends[$i] \n";
// }

// // traverse through foreach loop
// foreach ($friends as $friend)
// {
//     echo "$friend \n";
// }

// // traverse through foreach loop with index number
// foreach ($friends as $index => $friend)
// {
//     echo "$index. $friend \n";
// }


// Exercise: count array elements
// $friends = array("Bappy", "Rifat", "Walid", "Shuvo", "Fahim");
// // echo count($friends); // 5

// function helloCount($arr)
// {
//     $totalCount = 0;
//     foreach ($arr as $friend) {
//         $totalCount++;
//     }
//     return $totalCount;
// }

// echo helloCount($friends); // 5




// ==========  Associative Array  ========== //
// $friends = array("Bappy" => 25, "Rifat" => 35, "Walid" => 29);
// $friends = ["Bappy" => 25, "Rifat" => 35, "Walid" => 29];
// print_r($friends);
/*
Array
(
    [Bappy] => 25
    [Rifat] => 35
    [Walid] => 29
)
*/


// $ages = array(20 => 25, 30, 17, 45);
// print_r($ages);
/*
Array
(
    [20] => 25
    [21] => 30
    [22] => 17
    [23] => 45
)
*/


// $ages = array(20 => 25, 30, 30 => 17, 45, 7);
// print_r($ages);
/*
Array
(
    [20] => 25
    [21] => 30
    [30] => 17
    [31] => 45
    [32] => 7
)
*/


// $ages = array(20 => 25, 30, 5 => 17, 45, 7);
// print_r($ages);
/*
Array
(
    [20] => 25
    [21] => 30
    [5] => 17
    [22] => 45
    [23] => 7
)
*/


// $ages = array(20 => 25, 30, 5 => 17, 45, "5" => 7);
// print_r($ages);
/*
Array
(
    [20] => 25
    [21] => 30
    [5] => 7
    [22] => 45
)
*/


// $ages = array("one" => 25, "two" => 30, 5 => 17, 45, 5 => 7, 35, 5 => 70);
// print_r($ages);
/*
Array
(
    [one] => 25
    [two] => 30
    [5] => 70
    [6] => 45
    [7] => 35
)
*/


// $ages = array("one" => 25, "two" => 30, 17, 45, 7, 35, 70);
// print_r($ages);
/*
Array
(
    [one] => 25
    [two] => 30
    [0] => 17
    [1] => 45
    [2] => 7
    [3] => 35
    [4] => 70
)
*/


// ==========  access array element using keys  ========== //
// $friends = array("Bappy" => 25, "Rifat" => 35, "Walid" => 29);
// print_r($friends["Bappy"]); // 25
// print_r($friends['Rifat']); // 35


// ==========  re-assign array elements  ========== //
// $friends = array("Bappy" => 25, "Rifat" => 35, "Walid" => 29);
// $friends["Rifat"] = 27;
// print_r($friends["Rifat"]); // 27


// ==========  traverse associative array  ========== //
foreach ($array as $key => $value)
{
    // loop body
}

$friends = array("Bappy" => 25, "Walid" => 34, "Rifat" => 21);
foreach ($friends as $friendName => $friendAge)
{
    echo "$friendName : $friendAge \n";
}




// ==========  Multidimensional Array  ========== //
// A multidimensional array is an array which contains one or more arrays.

/********* 2d array table *********
Name    Age     Phone Number
Fuad    25      1794059375
Rafi    22      1875059389
Siam    18      1498456342
**********************************/
$info2 = [
    ["Fuad", 25, 1794059375],
    ["Rafi", 22, 1875059389],
    ["Siam", 18, 1498456342],
];

$info = array(
    array("Fuad", 25, 1794059375),
    array("Rafi", 22, 1875059389),
    array("Siam", 18, 1498456342),
);

print_r($info);

/*
Array
(
    [0] => Array
        (
            [0] => Fuad
            [1] => 25
            [2] => 1794059375
        )

    [1] => Array
        (
            [0] => Rafi
            [1] => 22
            [2] => 1875059389
        )

    [2] => Array
        (
            [0] => Siam
            [1] => 18
            [2] => 1498456342
        )
)
*/


// Access array element by index number
echo($info[1][0]); // Rafi
echo($info[2][1]); // 18


// traverse through foreach loop
for ($i = 0; $i < count($info); $i++)
{
    for ($j = 0; $j < count($info[$i]); $j++)
    {
        echo $info[$i][$j] . " ";
    }
    echo "\n";
}


// traverse through foreach loop
foreach ($students as $student)
{
    foreach ($student as $student_details)
    {
        echo "$student_details ";
    }
    echo "\n";
}


// Traverse Complex Multidimensional Array
$student_details = [
    [
        'name' => 'Fuad',
        'age' => 25,
        'city' => 'Dhaka',
        'phone' => '01794058575',
        'language' => ['HTML', 'CSS', 'JS', 'PHP', 'Python'],
    ],
    [
        'name' => 'Siam',
        'age' => 15,
        'city' => 'Barisal',
        'phone' => '01584058579',
        'language' => ['HTML', 'CSS', 'Python'],
    ],
    [
        'name' => 'Junnun',
        'age' => 23,
        'city' => 'Khulna',
        'phone' => '01874058574',
        'language' => ['JS', 'PHP', 'C#'],
    ]
];

// traverse through foreach loop
foreach ($student_details as $student_detail) {
    foreach ($student_detail as $key => $student) {
        if ($key == 'language') {
            foreach ($student as $language) {
                echo "$language ";
            }
        } else {
            echo "$student ";
        }
    }
    echo "\n";
}

/*
Fuad 25 Dhaka 01794058575 HTML CSS JS PHP Python
Siam 15 Barisal 01584058579 HTML CSS Python      
Junnun 23 Khulna 01874058574 JS PHP C#
*/


// ==========  Empty Array  ========== //
$arr = [];


// ==========  Mixing Array Keys  ========== //
$arr = [];

$arr[0] = "apple";
$arr[1] = "banana";
$arr["fruit"] = "orange";

print_r($arr);
/*
Array
(
    [0] => apple
    [1] => banana
    [fruit] => orange
)
*/

    
// ==========  Calling the function from the array item  ========== //
/// indexed array
// define the function
function myFunction()
{
    echo "This text comes from a function";
}

$arr = array("BMW", 15, ["apples", "bananas"], 'myFunction');
// calling the function from the array item:
$arr[3](); // This text comes from a function



/// associative array
// define the function
function myFunction2()
{
    echo "I comes from a function";
}

$myArr = array("car" => "Volvo", "age" => 15, "message" => 'myFunction2');
$myArr["message"](); // I comes from a function



// ==========  Add Array Items  ========== //
// array_push() 	—  inserts one or more elements to the end of an array.
// array_unshift() 	—  adds one or more elements to the beginning of an array.


// add single element in the end
$fruits = array("Apple", "Banana", "Cherry");
$fruits[] = "Orange";

print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Orange
)
*/


// add single element in the end
$fruits = array("Apple", "Banana", "Cherry");

// array_push - add element in the end
array_push($fruits, "Orange");

print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Orange
)
*/



// add multiple elements in the end
$fruits = array("Apple", "Banana", "Cherry");

// array_push - add element in the end
array_push($fruits, "Orange", "Lemon");

print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Orange
    [4] => Lemon
)
*/



// add single element to the beginning
$fruits = array("Apple", "Banana", "Cherry");

// array_unshift - adds one or more elements to the beginning of an array.
array_unshift($fruits, "Orange");

print_r($fruits);
/*
Array
(
    [0] => Orange
    [1] => Apple
    [2] => Banana
    [3] => Cherry
)
*/



// add multiple elements to the beginning
$fruits = array("Apple", "Banana", "Cherry");

// array_unshift - adds one or more elements to the beginning of an array.
array_unshift($fruits, "Orange", "Lemon");

print_r($fruits);
/*
Array
(
    [0] => Orange
    [1] => Lemon
    [2] => Apple
    [3] => Banana
    [4] => Cherry
)
*/



// Associative Array
// add single element
$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max");
$phone["color"] = "Gold";

print_r($phone);
/*
Array
(
    [brand] => Apple
    [model] => iPhone 13 Pro Max
    [color] => Gold
)
*/


// add multiple elements
$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max");
$phone += ["color" => "Gold", "year" => 2025];

print_r($phone);
/*
Array
(
    [brand] => Apple
    [model] => iPhone 13 Pro Max
    [color] => Gold
    [year] => 2025
)
*/




// ==========  Remove Array Item  ========== //
//  array_splice() :
    // To remove an existing item from an array.
    // After the deletion, the array gets reindexed automatically, starting at index 0.

// array_splice(arrayName, startIndex, deleteCount);

// Remove Single item
$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
array_splice($fruits, 1, 1);
print_r($fruits);

/*
Array
(
    [0] => Apple
    [1] => Cherry
    [2] => Orange
    [3] => Lemon
)
*/


// Remove multiple items
$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
array_splice($fruits, 1, 3);
print_r($fruits);

/*
Array
(
    [0] => Apple
    [1] => Lemon
)
*/



// unset() :
    // To remove an existing item from an array.
    // unset() function does not rearrange the indexes, meaning that after deletion the array will no longer contain the missing indexes.

// Remove Single item (Indexed Array)
$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
unset($fruits[2]);

print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [3] => Orange
    [4] => Lemon
)
*/


// Remove Multiple items (Indexed Array)
$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
unset($fruits[1], $fruits[3]);

print_r($fruits);
/*
Array
(
    [0] => Apple
    [2] => Cherry
    [4] => Lemon
)
*/



// Remove Single item (Associative Array)
$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "year" => 2025);
unset($phone["model"]);

print_r($phone);
/*
Array
(
    [brand] => Apple
    [year] => 2025
)
*/



// array_diff() :
    // to remove items from an associative array.
    // array_diff() function takes values as parameters, not keys.
    // this function returns a new array, without the specified items.

// Remove Multiple items (Associative Array)
$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "color" => "Gold", "year" => 2024);
$newArr = array_diff($phone, ["iPhone 13 Pro Max", 2024]);

print_r($newArr);
/*
Array
(
    [brand] => Apple
    [color] => Gold
)
*/



// array_pop() :
    // removes the last item of an array.

$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
array_pop($fruits);

print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Orange
)
*/



// array_shift() :
    // removes the first item of an array.

$fruits = array("Apple", "Banana", "Cherry", "Orange", "Lemon");
array_shift($fruits);

print_r($fruits);
/*
Array
(
    [0] => Banana
    [1] => Cherry
    [2] => Orange
    [3] => Lemon
)
*/



// ==========  Sort Array Items  ========== //
/*
sort() 	    -  sort arrays in ascending order
rsort() 	-  sort arrays in descending order
asort() 	-  sort associative arrays in ascending order, according to the value
ksort() 	-  sort associative arrays in ascending order, according to the key
arsort() 	-  sort associative arrays in descending order, according to the value
krsort() 	-  sort associative arrays in descending order, according to the key
*/


// sort() :
    // sort arrays in ascending order.
    // if it is string, then sort ascending alphabetical order.

$fruits = array("Orange", "Lemon", "Apple", "Cherry", "Banana");
sort($fruits);
print_r($fruits);
/*
Array
(
    [0] => Apple
    [1] => Banana
    [2] => Cherry
    [3] => Lemon
    [4] => Orange
)
*/


$numbers = array(4, 6, 2, 22, 11);
sort($numbers);
print_r($numbers);
/*
Array
(
    [0] => 2
    [1] => 4
    [2] => 6
    [3] => 11
    [4] => 22
)
*/



// rsort() :
    // sort arrays in descending order.
    // if it is string, then sort descending alphabetical order.

$fruits = array("Lemon", "Orange", "Apple", "Cherry", "Banana");
rsort($fruits);
print_r($fruits);
/*
Array
(
    [0] => Orange
    [1] => Lemon
    [2] => Cherry
    [3] => Banana
    [4] => Apple
)
*/


$numbers = array(4, 6, 2, 22, 11);
rsort($numbers);
print_r($numbers);
/*
Array
(
    [0] => 22
    [1] => 11
    [2] => 6
    [3] => 4
    [4] => 2
)
*/


// asort() :
    // sort associative arrays in ascending order, according to the value

$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "color" => "Gold", "year" => 2024);
asort($phone);
print_r($phone);
/*
Array
(
    [year] => 2024
    [brand] => Apple
    [color] => Gold
    [model] => iPhone 13 Pro Max
)
*/



// ksort() :
    // sort associative arrays in ascending order, according to the key

$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "color" => "Gold", "year" => 2024);
ksort($phone);
print_r($phone);
/*
Array
(
    [brand] => Apple
    [color] => Gold
    [model] => iPhone 13 Pro Max
    [year] => 2024
)
*/



//  arsort() :
    // sort associative arrays in descending order, according to the value

$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "color" => "Gold", "year" => 2024);
arsort($phone);
print_r($phone);
/*
Array
(
    [model] => iPhone 13 Pro Max
    [color] => Gold
    [brand] => Apple
    [year] => 2024
)
*/



// krsort() :
    // sort associative arrays in descending order, according to the key

$phone = array("brand" => "Apple", "model" => "iPhone 13 Pro Max", "color" => "Gold", "year" => 2024);
krsort($phone);
print_r($phone);
/*
Array
(
    [year] => 2024
    [model] => iPhone 13 Pro Max
    [color] => Gold
    [brand] => Apple
)
*/




// ==========  Array Interview Q.  ========== //

// Q – How to check if an array contains a specific element ?
// ⇒  The in_array() function - searches an array for a specific value.

$friends = array("Walid", "Bappy", "Rifat", "Shuvo");

// If the search parameter is a string and the type parameter is set to TRUE, the search is case-sensitive.
if (in_array("Rifat", $friends, TRUE)) {
    echo "Match found"; // execute
} else {
    echo "Match not found";
}


?>