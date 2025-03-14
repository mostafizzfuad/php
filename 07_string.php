<?php
echo "Hello"; // Hello
echo 'Hello'; // Hello


// Double quotes process special characters, single quotes does not.
$name = "Mostafizur";

echo "Hello $name"; // Hello Mostafizur
echo 'Hello $name'; // Hello $name

echo "Hello \t Goodbye"; // Hello    Goodbye
echo 'Hello \t Goodbye'; // Hello \t Goodbye


// ==========  string built-in functions  ========== //
// count = 1
// position = 0

echo strlen("Mostafizur Rahman");  // 17
echo str_word_count("Mostafizur Rahman");  // 2
echo strrev("Mostafizur Rahman"); // namhaR ruzifatsoM

echo strpos("Mostafizur Rahman", "Rahman"); // 11
// Tip: The first character position in a string is 0 (not 1).


// replace Fuad by Siam
echo str_replace("Fuad", "Siam", "My name is Fuad"); // My name is Siam

// replace Fuad by Siam using variable
$name = "My name is Fuad";
echo str_replace("Fuad", "Siam", $name); // My name is Siam
echo str_replace("Rafiq", "Siam", $name); // My name is Fuad


echo str_repeat("Fuad ", 3); // Fuad Fuad Fuad


// returns 0, if the two strings are equal
echo strcmp("Hello BD!", "Hello BD!");  // 0
echo strcmp("Hello BD!", "Hello World!");  // 1


echo strtolower("MOSTAFIZUR RAHMAN"); // mostafizur rahman
echo strtoupper("mostafizur rahman"); // MOSTAFIZUR RAHMAN
echo ucwords("hello world"); // Hello World


// returns a part of a string.(6 means - কত নাম্বার ইন্ডেক্স থেকে রিটার্ন করবে)
echo substr("Hello Mostafizur", 6); // Mostafizur
// Tip: The first character position in a string is 0 (not 1).


$x = "   Hello World! ";
echo trim($x); // Hello World!


$str = "Hello World!";
$arr = explode(" ", $str);
print_r($arr); // Array ( [0] => Hello [1] => World! )


$str = "Hello World!, How are you?";
print_r(str_split($str));


// Using the length parameter
print_r(str_split("Bangladesh", 3));
/*
Array
(
    [0] => Ban
    [1] => gla
    [2] => des
    [3] => h
)
*/


$str = "Hello World";
echo chunk_split($str,1,"."); // H.e.l.l.o. .W.o.r.l.d.
echo chunk_split($str, 2, "-"); // He-ll-o -Wo-rl-d-


echo str_shuffle("Hello World");
echo str_shuffle("Hello World");
echo str_shuffle("Hello World");
echo str_shuffle("Hello World");


// example
for ($i = 0; $i < 10; $i++)
{
    echo str_shuffle("Bangladesh");
    echo "\n";
}


// count_chars(string, mode)
$str = "Hello World";
echo count_chars($str, 3); // HWdelor
// 3 - a string with all the different characters used


// strip_tags(string, allow)
echo strip_tags("Hello <b>world!</b>");
echo strip_tags("<script>Hello World</script>");
echo strip_tags("Hello <b><i>world!</i></b>", "<b>");


// Find how many vowels in this string ? and print them ?
$str = "Hello World!, How are you?";
// print_r(str_split($str));
$arr = str_split($str);

$count = 0;
foreach ($arr as $letter) {
    $letter = strtolower($letter);

    if ($letter == 'a' || $letter == 'e' || $letter == 'i' || $letter == 'o' || $letter == 'u') {
        echo $letter . " ";
        $count++;
    }
}

echo $count;



// Practical Example of substr(): Converts 2010-02-24 format to 24/02/2010
$date_of_birth = "2010-02-24";
// 24/02/2010

// 0 1 2 3 4 5 6 7 8 9
// 2 0 1 0 - 0 2 - 2 4

$year = substr($date_of_birth, 0, 4);
$month = substr($date_of_birth, 5, 2);
$day = substr($date_of_birth, 8, 2);

echo $day . "/" . $month . "/" . $year; // 24/02/2010



// ==========  string concatenation  ========== //
$name = "Mostafizur";

echo "Hello " . $name; // Hello Mostafizur
echo "Hello $name"; // Hello Mostafizur
echo "Hello {$name}"; // Hello Mostafizur



// ==========  string slicing  ========== //
// count = 1
// position = 0

$x = "Hello World!";
echo substr($x, 6, 5); // World

// Start the slice at index 6 and end the slice 5 positions later.
// Note : The first character has index 0.



// ==========  slice to the end  ========== //
$x = "Hello World!";
echo substr($x, 6); // World!


// ==========  slice from the end  ========== //
// Use negative indexes to start the slice from the end of the string.
// The last character has index -1.

$x = "Hello World!";
echo substr($x, -5, 3); // orl
// Get the 3 characters, starting from the "o" in world! (index -5)


// ==========  negative length  ========== //
// negative length to specify how many characters to omit, starting from the end of the string.
// The last character has index -1.

$x = "Hi, how are you?";
echo substr($x, 5, -3); // ow are y
// From the string "Hi, how are you?", get the characters starting from index 5, and continue until you reach the 3. character from the end (index -3).


?>