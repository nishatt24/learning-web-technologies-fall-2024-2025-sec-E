<?php
if (isset($_POST['submit'])) {
    $username = trim($_POST['username']); // Trim whitespace for better validation
 
    // Function to check if the first character is a letter
    function startsWithLetter($string) {
        $firstChar = $string[0];
        return ctype_alpha($firstChar);
    }
 
    // Function to check for valid characters
    function hasValidCharacters($string) {
        for ($i = 0; $i < strlen($string); $i++) {
            $char = $string[$i];
            if (!(ctype_alpha($char) || $char === '.' || $char === '-' || $char === ' ')) {
                return false;
            }
        }
        return true;
    }
 
    // Main validation logic
    if (empty($username)) {
        echo "Error: Username cannot be empty.";
    } elseif (strlen($username) < 2) {
        echo "Error: Username must be at least 2 characters long.";
    } elseif (!startsWithLetter($username)) {
        echo "Error: Username must start with a letter.";
    } elseif (!hasValidCharacters($username)) {
        echo "Error: Username contains invalid characters. Only letters, dots (.), dashes (-), and spaces are allowed.";
    } else {
        echo "Success: Valid username - " . htmlspecialchars($username);
    }
} else {
    header('Location: 1.html'); // Redirect to form page if accessed directly
    exit;
}
?>