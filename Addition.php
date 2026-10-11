<!DOCTYPE html>
<html>

<head>
<title>Simple Addition</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Simple Addition</h2>

<?php
$a = 2;
$b = 3;
$c = 5;
$check = $a + $b;
$checkResult = ($check === $c) ? "True" : "False";
echo "<p>$a + $b = $c</p>";
echo "<p>The check that addition is working in PHP is: $checkResult</p>";
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

