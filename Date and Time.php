<!DOCTYPE html>
<html>

<head>
<title>Date and Time</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Date and Time</h2>

<?php
// https://www.w3schools.com/php/php_date.asp
echo "<p>The server date and time is: " . date("l j F Y h:i a") . " UTC " . date("P") . "</p>\n";
echo "<p>The server timezone location is: " . date_default_timezone_get() . "</p>\n";
date_default_timezone_set("Australia/Canberra");
echo "<p>The Australia/Canberra date and time is: " . date("l j F Y h:i a") . " UTC " . date("P") . "</p>\n";
echo "<p>The Australia/Canberra timezone location is: " . date_default_timezone_get() . "</p>\n";
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

