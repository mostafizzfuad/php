<?php 
// ⇒  Expression: Expression can produce values.
// ⇒  Statement: statement cannot produce values, only manipulates expression.

$firstName; // statement
$age = 21; // statement

$area = 3.14 * $radius * $radius; // statement
// Here, 3.14 * radius * radius is an expression that returns a value.

if ($age >= 18 && $age < 58) // statement
// Here, (age >= 18 && age < 58) is an expression that returns a boolean value




// ==========  if statement  ========== //
// Example 1
$purchase = 1700;

if ($purchase >= 1500) {
    echo "Discount !!";
}



// Example 2
$number = 4;

if ($number < 5) {
    $number += 5;
}

echo $number; // 9



// ==========  if...else statement  ========== //
$score = 98;

if ($score >= 100) {
    echo "Level Completed !!";
} else {
    echo "Try again !!"; // execute
}


// Difference between equal and identical operator
$number = "5";

if ($number == 5) {
    echo "This is Five"; // execute
} else {
    echo "This is something else";
}

if ($number === 5) {
    echo "This is Five";
} else {
    echo "This is something else"; // execute
}



// ==========  if...elseif...else statement  ========== //
$number = -5;

if ($number > 0) {
    echo "Positive number";
} elseif ($number < 0) {
    echo "Negative number";
} else {
    echo "Zero";
}

// another format
$number = -5;

if ($number > 0):
    echo "Positive number";
elseif ($number < 0):
    echo "Negative number";
else:
    echo "Zero";
endif;


// Example: Pass or Fail
$number = 53;

if ($number > 100 || $number < 0) {
    echo "Number should be 0 to 100";
} elseif ($number >= 33) {
    echo "Pass";
} else {
    echo "Fail";
}

echo "\n";

// ==========  nasted if...else statement  ========== //
$a = 9;

if ($a > 10) {
    echo "Above 10";
    if ($a > 20) {
        echo " and also above 20";
    } else {
        echo " but not above 20";
    }
} else {
    echo "Below 10 !!!";
}
// Above 10 but not above 20



// nested if else, alternate solution
$gender = "Male";
$age = 20;

if ($gender === "Male") {
    if ($age >= 18) {
        echo "Allowed !!"; // execute
    }
} else {
    echo "Not allowed !!";
}

// alternate solution
if ($gender === "Male" && $age >= 18) {
    echo "Allowed"; // execute
} else {
    echo "Not allowed !!";
}

?>