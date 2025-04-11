<?php 
ob_start();
session_start();

// $_SESSION['country'] = "Bangladesh";
// $_SESSION['city'] = "Dhaka";

// to change a session variable, just overwrite it
// $_SESSION['country'] = "USA";

echo "<pre>";
print_r($_SESSION);
echo "</pre>";

// session_unset();
// session_destroy();
?>