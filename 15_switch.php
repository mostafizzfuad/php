<?php 
// Example: vowel - constant
$ch = "U";
switch (strtolower($ch)) {
    case 'a':
        echo "Vowel";
        break;
    case 'e':
        echo "Vowel";
        break;
    case 'i':
        echo "Vowel";
        break;
    case 'o':
        echo "Vowel";
        break;
    case 'u':
        echo "Vowel";
        break;
    default:
        echo "Consonant";
}


// switch Statement with grouped cases
$ch = "F";
switch (strtolower($ch)) {
    case 'a':
    case 'e':
    case 'i':
    case 'o':
    case 'u':
        echo "Vowel";
        break;
    default:
        echo "Consonant";
}

?>