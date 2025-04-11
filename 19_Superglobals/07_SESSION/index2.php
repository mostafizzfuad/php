<?php 
session_name("myapp");
ob_start();
session_start([
    'cookie_lifetime' => 20
]);

// $_SESSION['country'] = "Bangladesh";
// $_SESSION['city'] = "Dhaka";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";
?>