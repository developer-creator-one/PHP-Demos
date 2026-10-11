<!DOCTYPE html>
<html>

<head>
<title>Word Add</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Word Add</h1>

<?php

/*
https://www.w3schools.com/php/php_form_validation.asp
*/

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

$prompt = "";
if(isset($_POST["wordOne"]) && isset($_POST["wordTwo"])) {
 $wordOne = test_input($_POST["wordOne"]);
 $wordTwo = test_input($_POST["wordTwo"]);
 $wordsBoth = $wordOne . " " . $wordTwo;
 echo "<p>The result is: $wordsBoth</p>\n";
}

echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">';
echo 'Enter the first word: <input type="text" name="wordOne"><br>';
echo 'Enter the second word: <input type="text" name="wordTwo"><br>';
echo '<input type="submit" value="Submit">' . "\n";
echo "</form>\n";

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

