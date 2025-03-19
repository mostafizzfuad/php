<?php 
// define(name, value);

define("GREETING", "Welcome to PHP !!");
echo GREETING; // Welcome to PHP !!

define("PIE", 3.1416);
echo PIE; // 3.1416

const MYCAR = "BMW";
echo MYCAR; // BMW


// ==========  constant array  ========== //
define("friends", ["Rifat", "Walid", "Shuvo"]);

echo friends[0]; // Rifat
echo friends[1]; // Walid
echo friends[2]; // Shuvo


// ==========  Constants are Global  ========== //

define("AC", 556464645);
function helloTest()
{
    echo AC; // 556464645
}
helloTest();
?>