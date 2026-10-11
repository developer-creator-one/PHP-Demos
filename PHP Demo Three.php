<!DOCTYPE html>
<html>

<head>
<title>PHP Demo Three</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>PHP Demo Three</h1>

<?php

echo "<p>\n";
for ($i = 1; $i <= 500; $i*=5) {
  echo "A cat walked around the oval this many times this year: $i.<br>\n";
}
echo "</p>\n";

/*

https://www.w3schools.com/php/
https://www.w3schools.com/php/php_string.asp
*/

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>


