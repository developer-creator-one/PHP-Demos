<!DOCTYPE html>
<html>

<head>
<title>For Loop</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>For Loop</h2>

<?php
$a = "Catapult";
for ($i = 1; $i < 10; $i++) {
 echo "$a $i<br>\n";
}
echo ("<p>Cats can catapult after a mouse, many times, until the meow-ouse is caught.</p>\n");
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

