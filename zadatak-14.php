14. Napisati jednostavan PHP skript za provjeru je li ID e-pošte valjan ili ne

<?php
// Slanje važeće/nevažeće e-pošte
$email = "techstudy.org@gmail.com";
if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

    echo '"' . $email . '" is valid Email ID' . "\n";
} else {
    echo '"' . $email . '" is invalid Email ID' . "\n";
}
?>