<?php
$a = 5; // Integer
$b = 5.34; // Float
$c = "25"; // Number Strings


// ==========  number system  ========== //
$decimal = 12;
$binary = 0b11;
$octal = 015;
$hexaDecimal = 0x2B;

// convert automatically into decimal
echo $decimal; // 12
echo $binary; // 3
echo $octal; // 13
echo $hexaDecimal; // 43




// ==========  number system conversion  ========== //
$decimal = 12;

printf("%d", $decimal); // decimal : 12
printf("%b", $decimal); // convert binary : 1100
printf("%x", $decimal); // convert hexadecimal : c
printf("%o", $decimal); // convert octal : 14



// ==========  int * float = float  ========== //
// the result is stored as float, because one of the operands is a float (2.5).
$result = 4 * 2.5;
echo $result; // 10
var_dump($result); // float(10)



// ==========  predefined constants for integers  ========== //
echo PHP_INT_MAX; // 9223372036854775807
echo PHP_INT_MIN; // -9223372036854775808
echo PHP_INT_SIZE; // 8


// ==========  is_integer() or is_int()  ========== //
$x = 5985;
echo is_int($x); // 1
echo is_integer($x); // 1
var_dump(is_int($x)); // bool(true)

$x = 59.85;
echo is_int($x); //
echo is_integer($x); //
var_dump(is_int($x)); // bool(false)



// ==========  predefined constants for floats  ========== //
echo PHP_FLOAT_MAX; // 1.7976931348623E+308
echo PHP_FLOAT_MIN; // 2.2250738585072E-308
echo PHP_FLOAT_DIG; // 15
echo PHP_FLOAT_EPSILON; // 2.2204460492503E-16



// ==========  is_float() or is_double()  ========== //
$x = 59.85;
echo is_float($x); // 1
echo is_double($x); // 1
var_dump(is_float($x)); // bool(true)
var_dump(is_double($x)); // bool(true)

$x = 5985;
echo is_float($x); //
echo is_double($x); //
var_dump(is_float($x)); // bool(false)
var_dump(is_double($x)); // bool(false)



// ==========  Infinity  ========== //
// A numeric value that is larger than PHP_FLOAT_MAX is considered infinite.
$x = 1.9e411;
var_dump($x); // float(INF)


echo is_finite(2); // 1
echo is_finite(log(0)); //
echo is_finite(2000); // 1


echo is_infinite(2); //
echo is_infinite(log(0)); // 1
echo is_infinite(2000); //


// ==========  NaN  ========== //
echo sqrt(16); // 4
echo sqrt(-16); // NAN

echo acos(0); // 1.5707963267949
echo acos(-1); // 3.1415926535898
echo acos(1); // 0
echo acos(-3); // NAN
echo acos(3); // NAN

// acos() function returns the arc cosine of a number.
// acos() function returns NAN if number is not in the range -1 to 1
// acos(-1) returns the value of Pi.



echo is_nan(200); //
echo is_nan(acos(1)); //
var_dump(is_nan(acos(1))); // bool(false)

echo is_nan(acos(1.01)); // 1
var_dump(is_nan(acos(1.01))); // bool(true)



// ==========  Numerical Strings  ========== //
$x = 5985;
var_dump(is_numeric($x)); // bool(true)

$x = "5985";
var_dump(is_numeric($x)); // bool(true)

$x = "59.85" + 100;
var_dump(is_numeric($x)); // bool(true)

$x = "Hello";
var_dump(is_numeric($x)); // bool(false)
?>