<!DOCTYPE html>
<html>

<head>
<title>Math Power</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Math Power</h1>

<h2>3 to the power of x, with x an integer and 0<=x<=4</h2>
Two methods, both the same result:<br>
<?php
$result = 1;
for ($x = 0; $x <= 4; $x++) {
   echo $result . " ";
   $result *= 3;
}
echo "<br>\n";
for ($x = 0; $x <= 4; $x++) {
   $result = pow(3, $x);
   echo $result . " ";
}
echo "<br>\n";
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

