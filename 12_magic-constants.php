<?php 
// ==========  __CLASS__  ========== //
// If used inside a class, the class name is returned.
class Fruits
{
    public function myValue()
    {
        return __CLASS__; // return ClassName
    }
}

$obj = new Fruits();
echo $obj->myValue(); // Fruits


echo "\n";


// ==========  __DIR__  ========== //
// The directory of the file
echo __DIR__; // D:\php


echo "\n";


// ==========  __FILE__  ========== //
// The file name including the full path.
echo __FILE__; // D:\php\hello.php


echo "\n";


// ==========  __FUNCTION__  ========== //
// If inside a function, the function name is returned.
function helloTest()
{
    return __FUNCTION__; // return FunctionName
}

echo helloTest(); // helloTest


echo "\n";


// ==========  __METHOD__  ========== //
// If used inside a function that belongs to a class, both class and function name is returned.
class Fruit
{
    public function helloTest()
    {
        return __METHOD__; // return FunctionName
    }
}

$obj = new Fruit();
echo $obj->helloTest(); // Fruit::helloTest


echo "\n";


// ==========  __LINE__  ========== //
// return current line number.
echo __LINE__; // 67


echo "\n";


// ==========  __NAMESPACE__  ========== //
// If used inside a namespace, the name of the namespace is returned.

// namespace myArea;
// function helloTest()
// {
//     return __NAMESPACE__;
// }
// echo helloTest(); // myArea


echo "\n";


// ==========  __TRAIT__  ========== //
// If used inside a trait, the trait name is returned.
trait message1
{
    public function msg1()
    {
        echo __TRAIT__; // message1
    }
}

class Welcome
{
    use message1;
}

$obj = new Welcome();
$obj->msg1();


echo "\n";


// ==========  ClassName::class  ========== //
// Returns the name of the specified class and the name of the namespace, if any.

// namespace myArea;
// class Fruits
// {
//     public function helloTest()
//     {
//         return Fruits::class;
//     }
// }
// $obj = new Fruits();
// echo $obj->helloTest(); // myArea\Fruits

?>