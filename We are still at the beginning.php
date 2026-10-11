<!DOCTYPE html>
<html>

<head>
<title>We are still at the beginning</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>We are still at the beginning</h2>

<p>
If we are still at the beginning then,
it's the journey that matters, as we move forward,
the beginning shifts to wherever we now are, so
we seem to have never started.
</p>

<?php
$a = 100000;
$b = 130.5;
$c = $a + $b-0.5;
$d = $c - 130;
echo "<p>We started with " . number_format($a) . "</p>\n";
echo "<p>The answer is " . number_format($d) . "</p>\n";
?>

<p>
It seems we are still at the same point, though in fact we have moved
through changes, and it appears to be the same, since the calculation
tells us the same number, it doesn't tell us the steps that occurred
in the middle.
</p>

<?php
echo "<h2>Source Code</h2>";
echo "\n";
highlight_file(__FILE__);
?>

</body>
</html>

