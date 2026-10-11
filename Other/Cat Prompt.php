<!DOCTYPE html>
<html>

<head>
<title>Cat Prompt</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Cat Prompt</h1>

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
if(isset($_POST["prompt"])) {
 $prompt = test_input($_POST["prompt"]);
 $promptDouble = 2*$prompt;
 echo "<p>Will you get to having had $promptDouble many cats?</p>\n";
}

echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">';
echo 'Enter the number of cats you have, or have had: <input type="text" name="prompt"><br>';
echo '<input type="submit" value="Submit">' . "\n";
echo "</form>\n";

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

