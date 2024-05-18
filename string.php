
<?php 

// Main Array of Strings
$strings = ["Hello", "World", "PHP", "Programming"];

// The foreach loop is created as the value of each array index is checked;
foreach ($strings as $string) {
    // First count the vowels of each index:
    $vowelCount = countVowels($string);

    // Secoend eache value are Reverse:
    $reversedStr = reverseString($string);

    // Display output: 
    echo "Original String: $string, Vowel Count: $vowelCount, Reversed String: $reversedStr\n";
}

// Function of count vowels
function countVowels($string) {
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $count = 0;
    foreach (str_split(strtolower($string)) as $char) {
        if (in_array($char, $vowels)) {
            $count++;
        }
    }
    return $count;
}

// Function of reverse a string
function reverseString($string) {
    return strrev($string);
}








?>