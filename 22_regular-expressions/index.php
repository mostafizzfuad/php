<!-- 
 
preg_match() : Returns 1 if the pattern was found in the string and 0 if not
preg_match_all() : Returns the number of times the pattern was found in the string, which may also be 0
preg_replace() : Returns a new string where matched patterns have been replaced with another string

-->

<?php 


// ==========  preg_match()  ========== //
// Use a regular expression to do a case-insensitive search for "w3schools" in a string :	

$str = "Visit W3Schools";
$pattern = "/w3schools/i";
echo preg_match($pattern, $str); // 1



// ==========  preg_match_all()  ========== //
// preg_match_all() function will tell you how many matches were found for a pattern in a string.

// Use a regular expression to do a case-insensitive count of the number of occurrences of "ain" in a string :
$str = "The rain in SPAIN falls mainly on the plains.";
$pattern = "/ain/i";
echo preg_match_all($pattern, $str); // 4



// ==========  preg_replace()  ========== //
// replace all of the matches of the pattern in a string with another string.

// Use a case-insensitive regular expression to replace Microsoft with W3Schools in a string :
$str = "Visit Microsoft!";
$pattern = "/microsoft/i";
echo preg_replace($pattern, "W3Schools", $str); // Visit W3Schools!


?>