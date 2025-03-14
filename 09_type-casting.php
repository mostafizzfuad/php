<?php
// ==========  convert to int  ========== //
var_dump((int)23465.768); // int(23465)
var_dump((int)"23465.768"); // int(23465)
var_dump((int)"25 kilometers"); // int(25)
var_dump((int)"kilometers 25"); // int(0)
var_dump((int)true); // int(1)
var_dump((int)false); // int(0)
var_dump((int)NULL); // int(0)



// ==========  convert to string  ========== //
var_dump((string)23465.768); // string(9) "23465.768"
var_dump((string)"23465.768"); // string(9) "23465.768"
var_dump((string)true); // string(1) "1"
var_dump((string)false); // string(0) ""
var_dump((string)NULL); // string(0) ""



// ==========  convert to float  ========== //
var_dump((float)23465.768); // float(23465.768)
var_dump((float)"23465.768"); // float(23465.768)
var_dump((float)"25 kilometers"); // float(25)
var_dump((float)"kilometers 25"); // float(0)
var_dump((float)true); // float(1)
var_dump((float)false); // float(0)
var_dump((float)NULL); // float(0)



// ==========  convert to bool  ========== //
var_dump((bool)0); // bool(false)  
var_dump((bool)false); // bool(false)  
var_dump((bool)""); // bool(false)
var_dump((bool)NULL); // bool(false)
var_dump((bool)5); // bool(true)
var_dump((bool)5.34); // bool(true)
var_dump((bool)-1); // bool(true)  
var_dump((bool)0.1); // bool(true)  
var_dump((bool)"hello"); // bool(true)
var_dump((bool)true); // bool(true)




// ==========  convert to array  ========== //
var_dump((array)5);
var_dump((array)5.34);
var_dump((array)0);
var_dump((array)"hello");
var_dump((array)"");
var_dump((array)true);
var_dump((array)NULL);

// convert to array from object
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
        return "My car is " . $this->color . " " . $this->model . "!";
    }
}

$myCar = new Car("red", "Lamborghini");
$myCar = (array)$myCar; // converting

var_dump($myCar);
/*
array(2) {
  ["color"]=>
  string(3) "red"
  ["model"]=>
  string(11) "Lamborghini"
}
*/

print_r($myCar);
/*
Array
(
    [color] => red
    [model] => Lamborghini
)
*/

echo $myCar["color"]; // red
echo $myCar["model"]; // Lamborghini



// ==========  convert to object  ========== //
var_dump((object)5);
var_dump((object)5.34);
var_dump((object)0);
var_dump((object)"hello");
var_dump((object)"");
var_dump((object)true);
var_dump((object)NULL);

// convert to object from array
$a = array("Volvo", "BMW", "Toyota"); // indexed array
$b = array("Mostafizur" => "25", "Siam" => "16", "Junnun" => "23"); // associative array

$a = (object) $a;
$b = (object) $b;

var_dump($a);
var_dump($b);

/*
object(stdClass)#1 (3) {
  ["0"]=>
  string(5) "Volvo"
  ["1"]=>
  string(3) "BMW"
  ["2"]=>
  string(6) "Toyota"
}
object(stdClass)#2 (3) {
  ["Mostafizur"]=>
  string(2) "25"
  ["Siam"]=>
  string(2) "16"
  ["Junnun"]=>
  string(2) "23"
}
*/

print_r($a);
print_r($b);
/*
stdClass Object
(
    [0] => Volvo
    [1] => BMW
    [2] => Toyota
)
stdClass Object
(
    [Mostafizur] => 25
    [Siam] => 16
    [Junnun] => 23
)
*/

echo $a->{1}; // BMW
echo $b->Mostafizur; // 25