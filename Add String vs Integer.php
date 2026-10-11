<!DOCTYPE html>
<html>

<head>
<title>Add String vs Integer</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Add String vs Integer</h2>

<?php
$a = 2;
$b = 3;
$c = $a + $b;
$d = "2";
$e = "3";
$f = $d + $e;
$g = $a . $b;
$h = $d . $e;
$i = substr("100px",0,3);
$j = intval($i);
$k = $i + $i;
$l = $j + $j;
$m = gettype($i);
echo "<p>Addition of integers: $a + $b = $c</p>\n";
echo "<p>Addition of strings: $d + $e = $f</p>\n";
echo "<p>Concatenation of integers: $a . $b = $g</p>\n";
echo "<p>Concatenation of strings: $d . $e = $h</p>\n";
echo "<p>Addition of strings $i+$i of type $m that looks like a number but it's a string: $k</p>\n";
echo "<p>Addition of integers $j+$j: $l</p>\n";
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

