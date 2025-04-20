<?php 

// ==========  Directory Structure View  ========== //
// $dir_content = scandir("D:/laragon/www/");
// echo "<pre>";
// print_r($dir_content);
// echo "</pre>";


// ==========  File Read - Way 1  ========== //
// if ($fh = fopen('city.txt','r')) {
//     while (!feof($fh)) {
//         $line = fgets($fh);
//         echo $line.'<br>';
//     }
//     fclose($fh);
// }


// ==========  File Read - Way 2  ========== //
// $file = file_get_contents('city.txt');
// echo nl2br($file);


// ==========  File Read - Way 3  ========== //
// $file_lines = file('city.txt');
// foreach($file_lines as $line) {
//     echo $line.'<br>';
// }


// ==========  Create or Write File  ========== //
// $filename = 'country.txt';
// $file = fopen($filename,'w');
// if($file == false) {
//     echo 'Error in opening file';
//     exit();
// }
// fwrite($file, "USA\nBangladesh\nJapan");
// fclose($file);


// ==========  Append to File  ========== //
$filename = 'country.txt';
$file = fopen($filename,'a'); // 'a' = append mode
if ($file == false) {
    echo 'Error in opening file';
    exit();
}
fwrite($file, "\nCanada\nEngland");
fclose($file);