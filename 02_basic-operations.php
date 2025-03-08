<?php
// php code goes here ...


// ========== To check your php version ========== //
// echo phpversion(); // 8.2.12
// echo phpinfo();



// ========== echo statements ========== //
echo "Hello World!";

echo PHP_EOL; // End Of Line or newline
echo "\n"; // newline

// print using variable
$countryName = "Bangladesh";
$year = 2025;

echo $countryName; // Bangladesh
echo $year; // 2025

echo $number = 100; // 100



// ========== echo vs print statement ========== //
// echo statement
echo "Hello world! \n";
echo "<h1>Hello BD</h1>";

// print statement
print "Hello world!!! \n";
print "<h1>Hello BD</h1>";

// echo can take multiple parameters
echo "This ", "string ", "made ", "with multiple parameters";

// print cannot take multiple parameters
// print "This ", "string ", "made ", "with multiple parameters"; // error

// echo can be used with or without parentheses: echo or echo()
echo ("Hello, World!");
echo "Hello, World!";

// print can be used with or without parentheses: print or print()
print("Hello, World!");
print "Hello, World!";



// ========== echo vs printf() vs sprintf() ========== //
// echo and printf(): direct data print kore
$name = "Mostafizur";

echo "My name is $name \n";
echo "My name is {$name} \n";

printf("My name is %s \n", $name);

// sprintf(): data return kore
$output = sprintf("My name is %s", $name);
echo $output;

// My name is Mostafizur
// My name is Mostafizur
// My name is Mostafizur
// My name is Mostafizur



// ========== echo vs print_r() ========== //
// echo  ⇒  it’s print simple data type
// print_r()  ⇒   it prints complex data – array, object, resource etc … 



// ========== PHP newline ========== //
echo PHP_EOL; // End Of Line or newline
echo "\n"; // newline



// ========== Escape Characters ========== //
/************************
\'	    –  Single Quote
\"	    –  Double Quote
\$	    –  PHP variables
\n	    –  New Line
\t	    –  Tab
\ooo	–  Octal value
\xhh	–  Hex value
************************/



// ========== PHP Case Sensitivity ========== //
echo "Hello World! \n"; // Hello World!
echo "Hello World! \n"; // Hello World!
echo "Hello World! \n"; // Hello World!



// ========== Comments ========== //
// single line comment
# single line comment


/*
Multiline comment :
Name : Mostafizur Rahman Fuad
Phone : 01794059375
Bsc In CSE, BUBT
*/