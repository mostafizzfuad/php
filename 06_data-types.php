<?php
// string
$name = "Mostafizur Rahman";

// integer
$year = 2025;

// float
$number = 27.563;

// boolean
$isRaining = true;

// array: array stores multiple values in one single variable.
$arr = array(12, 22, 31);
$arr2 = [2023, 2012, 2024, 2005];
$names = array("Fuad", "Musfiqur", "Junnun");
$names2 = array('Fuad', 'Musfiqur', 'Junnun');
$names3 = ["Fuad", "Musfiqur", "Junnun"];
$names4 = ['Fuad', 'Musfiqur', 'Junnun'];


// ==========  objects  ========== //
// Example 1
class Student
{
    function department()
    {
        return "BSC in CSE";
    }

    function details()
    {
        echo $this->department();
    }
}

$st = new Student();
$st->details(); // BSC in CSE


// Example 2
class Car
{
    public $color;
    public $model;

    public function __construct($color, $model)
    {
        $this->color = $color;
        $this->model = $model;
    }

    public function message()
    {
        return "My car is a " . $this->color . " " . $this->model . " !";
    }
}

$myCar = new Car("red", "BMW");
print_r($myCar->message()); // My car is a red BMW !


// Example 3: stdClass()
$obj = new stdClass();
$obj->name = 'Mostafizur';
$obj->age = 26;

print_r($obj);



// ==========  NULL  ========== //
$x = NULL;
$name; // If a variable is created without a value, it is automatically assigned a value of NULL.

var_dump($x); // NULL
var_dump($name); // NULL



// ==========  Null vs Empty  ========== //
$variable = null;
$variable = ""; // empty

// null - patro or pani kono kichui nai
// empty - patro ache pani nai



// ==========  resource  ========== //
// The special resource type is not an actual data type. It is the storing of a reference to functions and resources external to PHP.
// A common example of using the resource data type is a database call.

?>