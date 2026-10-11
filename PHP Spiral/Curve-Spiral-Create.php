<?php

// https://www.w3schools.com/php/php_form_validation.asp

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

// Create a canvas
$width = isset($_GET['width']) ? test_input($_GET['width']) : 300;
$degreeChangeMax = isset($_GET['degreeChangeMax']) ? test_input($_GET['degreeChangeMax']) : 2.0;
$countsToPlot = isset($_GET['countsToPlot']) ? test_input($_GET['countsToPlot']) : 5000;
$height = $width;
$image = imagecreatetruecolor($width, $height);

// Determine the pixels and colour
$x = $width/2.0; // start in middle
$y = $height/2.0;
$red = 0;
$green = 0;
$blue = 255;
$color = imagecolorallocate($image, $red, $green, $blue);
$angle = 90.0;
$angleInRadians = 2.0*pi()/360.0*$angle;
$angleChangeInDegreesPerPlotPoint = 1.0;
imagesetpixel($image, $x, $y, $color);
$randomizer = new \Random\Randomizer();
while ($countsToPlot > 0.0) {
 $angleChangeInDegreesPerPlotPoint = $degreeChangeMax*$randomizer->nextFloat(); // 0.0 to $degreeChangeMax
 $angle -= $angleChangeInDegreesPerPlotPoint;
 if ($angle < 0.0) {
  $angle = 359.0;
 }
 $angleInRadians = 2.0*pi()/360.0*$angle;
 $x += cos($angleInRadians);
 $y += sin($angleInRadians);
 if ($x >= $width) {
  $x = $width-1.0;
 }
 if ($x < 0.0) {
  $x = 0.0;
 }
 if ($y >= $height) {
  $y = $height-1.0;
 }
 if ($y < 0.0) {
  $y = 0.0;
 }
 imagesetpixel($image, $x, $y, $color);
 $countsToPlot -= 1;
}

// Output the image to the browser
header('Content-Type: image/png');
imagepng($image);

// Free memory
imagedestroy($image);
?>


