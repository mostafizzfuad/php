<?php 
// this code run in localhost

echo "<pre>";
print_r($_SERVER); // print all server info


echo $_SERVER['PHP_SELF']; // /web-learn-bd/hello.php
echo "<br>";


// domain name
echo $_SERVER['SERVER_NAME']; // localhost
echo "<br>";

// domain name
echo $_SERVER['HTTP_HOST']; // localhost
echo "<br>";


// Returns the IP address of the host server
echo $_SERVER['SERVER_ADDR']; // ::1
echo "<br>";


// Returns the IP address from where the user is viewing the current page
echo $_SERVER['REMOTE_ADDR']; // ::1
echo "<br>";


// root directory
echo $_SERVER['DOCUMENT_ROOT']; // C:/xampp/htdocs
echo "<br>";
echo $_SERVER['DOCUMENT_ROOT']; // D:/laragon/www
echo "<br>";


// Returns the absolute pathname of the currently executing script
echo $_SERVER['SCRIPT_FILENAME']; // C:/xampp/htdocs/web-learn-bd/hello.php
echo "<br>";


// Returns the path of the current script (without root directory)
echo $_SERVER['SCRIPT_NAME']; // /web-learn-bd/hello.php
echo "<br>";


// Returns the path of the current script (without root directory)
echo $_SERVER['REQUEST_URI']; // /web-learn-bd/hello.php
echo "<br>";


echo $_SERVER['REQUEST_METHOD']; // GET / POST
echo "<br>";


echo $_SERVER['SERVER_PORT']; // 80



?>