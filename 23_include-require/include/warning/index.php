<!-------------  
include and include_once only show a warning and continue to load the rest of the page. 
------------->

<?php
echo "Bangladesh<br>";
echo "USA<br>";

include("./another1.php");

echo "Canada<br>";
?>

<!--
Bangladesh
USA

Warning: include(./another1.php): Failed to open stream: No such file or directory in D:\laragon\www\index.php on line 7

Warning: include(): Failed opening './another1.php' for inclusion (include_path='.;D:/laragon/etc/php/pear') in D:\laragon\www\index.php on line 7
Canada
-->