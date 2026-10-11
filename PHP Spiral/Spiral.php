<!DOCTYPE html>
<html>

<head>
<title>Spiral</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Spiral</h1>

<h2>Circle-Spiral-Create</h2>
<form action="Circle-Spiral-Create.php" method="get">
Width: <input type="text" name="width" value="300"><br>
<input type="submit">
</form>

<h2>Square-Spiral-Create</h2>
<form action="Square-Spiral-Create.php" method="get">
Width: <input type="text" name="width" value="300"><br>
Length Decrement: <input type="text" name="lengthDecrement" value="5.0"><br>
<input type="submit">
</form>

<h2>Curve-Spiral-Create</h2>
<form action="Curve-Spiral-Create.php" method="get">
Width: <input type="text" name="width" value="300"><br>
degreeChangeMax: <input type="text" name="degreeChangeMax" value="2.0"><br>
countsToPlot: <input type="text" name="countsToPlot" value="5000"><br>
<input type="submit">
</form>

<?php
echo '<h2>Source Code of Spiral.php</h2>' . "\n";
highlight_file("Spiral.php"); // __FILE__

echo '<h2>Source Code of Circle-Spiral-Create.php</h2>' . "\n";
highlight_file("Circle-Spiral-Create.php");

echo '<h2>Source Code of Square-Spiral-Create.php</h2>' . "\n";
highlight_file("Square-Spiral-Create.php");

echo '<h2>Source Code of Curve-Spiral-Create.php</h2>' . "\n";
highlight_file("Curve-Spiral-Create.php");

?>

</body>
</html>

