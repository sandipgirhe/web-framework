<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the entered string from the form
    $inputString = $_POST["inputString"];

    // Call the function to count vowels
    $vowelCount = countVowels($inputString);

    // Display the result
    echo "The total number of vowels in the entered string is: $vowelCount";
}

// Function to count vowels in a string
function countVowels($str) {
    // Case-insensitive count of vowels (a, e, i, o, u)
    $vowelsCount = preg_match_all("/[aeiou]/i", $str, $matches);

    return $vowelsCount;
}
?>
