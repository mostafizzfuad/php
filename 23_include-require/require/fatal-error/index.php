<!------------ 
require and require_once throw a fatal error if the file is not found  and cannot load the rest of the page. 
------------>

<?php
echo "Bangladesh<br>";
echo "USA<br>";

require("./another1.php");

echo "Canada<br>";
?>

<!--
Bangladesh
USA

Warning: require(./another1.php): Failed to open stream: No such file or directory in D:\laragon\www\index.php on line 7

Fatal error: Uncaught Error: Failed opening required './another1.php' (include_path='.;D:/laragon/etc/php/pear') in D:\laragon\www\index.php:7 Stack trace: #0 {main} thrown in D:\laragon\www\index.php on line 7
-->