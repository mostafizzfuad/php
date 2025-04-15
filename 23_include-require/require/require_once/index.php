<?php
echo "Bangladesh<br>";
echo "USA<br>";

require("./another.php");
require_once("./another.php"); // not execute, because another.php file already included.

echo "Canada<br>";
?>

<!--
Bangladesh
USA
CHINA
Canada
-->