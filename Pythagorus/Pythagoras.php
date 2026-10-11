<!DOCTYPE html>
<html>

<head>
<title>Pythagoras</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Pythagoras</h2>

<p>
c squared = a squared + b squared<br>
for a right angle triangle with two sides of length a and b,
and hypotenuse of length c.
</p>

<?php

$x = 15;
$y = 20;
$z = sqrt(pow($x,2)+pow($y,2));
echo "<p>sqrt($x squared + $y squared) = $z</p>\n";

echo "<h2>Source Code</h2>";
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

