<?php
echo "Bangladesh<br>";
echo "USA<br>";

include("./another.php");
include_once("./another.php"); // not executed, because another.php file already included.

echo "Canada<br>";
?>

<!--
Bangladesh
USA
CHINA
Canada
-->