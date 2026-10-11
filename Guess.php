<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Guess</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Guess</h1>

<?php

/*
https://www.w3schools.com/php/
https://www.w3schools.com/php/php_sessions.asp
https://www.w3schools.com/php/php_forms.asp
https://www.w3schools.com/php/php_form_validation.asp
*/

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$correctNumber = "";
if(isset($_SESSION["correctNumber"])) {
 $correctNumber = $_SESSION["correctNumber"];
} else {
 $correctNumber = rand(0, 99);
 $_SESSION["correctNumber"] = $correctNumber;
}
$lowerBound = $correctNumber - rand(1,30);
$lowerBound = max($lowerBound, 0);
$upperBound = $correctNumber + rand(1,30);
$upperBound = min($upperBound, 99);

if(isset($_POST["guess"])) {
 $_SESSION["yourguess"] = test_input($_POST["guess"]);
}

$yourGuess = "";
if(isset($_SESSION["yourguess"])) {
 $yourGuess = $_SESSION["yourguess"];
}

if ($yourGuess == $correctNumber) {
 echo "You guessed correctly with $yourGuess. I am picking a new number for you to guess.<br><p/><br>";
 $correctNumber = rand(0, 99);
 $_SESSION["correctNumber"] = $correctNumber;
}

echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">';
echo 'Enter Your Guess of a number between 0 and 99: <input type="text" name="guess" value="' . $yourGuess . '"><br>';
echo "Clue: The number is between $lowerBound and $upperBound<br>\n";
echo '<input type="submit" value="Submit">' . "\n";
echo "</form>\n";

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

