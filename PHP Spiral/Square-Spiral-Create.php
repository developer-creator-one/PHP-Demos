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
$lengthDecrement = isset($_GET['lengthDecrement']) ? test_input($_GET['lengthDecrement']) : 5.0;
$height = $width;
$image = imagecreatetruecolor($width, $height);

// Determine the pixels and colour
$x = $width - 1.0;
$y = 0.0;
$lineLength = $width-1.0;
$xChange = -$lineLength;
$yChange = 0.0;
$red = 0;
$green = 0;
$blue = 255;
$color = imagecolorallocate($image, $red, $green, $blue);
while ($lineLength > 0.0) {
 if (($xChange < 0.0) && ($yChange == 0.0) && ($x >= 0.0)) {
  // Drawing a horizontal line from right to left
  while (($xChange < 0.0) && ($yChange == 0.0) && ($x >= 0.0)) {
   imagesetpixel($image, $x, $y, $color);
   $xChange += 1.0;
   $x -= 1.0;
  }
  // next is vertical line from left-top to left-bottom
  $lineLength -= $lengthDecrement;
  $xChange = 0.0;
  $yChange = $lineLength;
 } elseif (($xChange == 0.0) && ($yChange > 0.0) && ($y < $height)) {
  // Drawing a vertical line from top-left to bottom-left
  while (($xChange == 0.0) && ($yChange > 0.0) && ($y < $height)) {
   imagesetpixel($image, $x, $y, $color);
   $yChange -= 1.0;
   $y += 1.0;
  }
  // next is horizontal line from bottom-left to bottom-right
  $lineLength -= $lengthDecrement;
  $xChange = $lineLength;
  $yChange = 0.0;
 } elseif (($xChange > 0.0) && ($yChange == 0.0) && ($x < $width)) {
  // Drawing a horizontal line from bottom-left to bottom-right
  while (($xChange > 0.0) && ($yChange == 0.0) && ($x < $width)) {
   imagesetpixel($image, $x, $y, $color);
   $xChange -= 1.0;
   $x += 1.0;
  }
  // next is vertical line from bottom-right to top-right
  $lineLength -= $lengthDecrement;
  $xChange = 0.0;
  $yChange = -$lineLength;
 } elseif (($xChange == 0.0) && ($yChange < 0.0) && ($y >= 0.0)) {
  // Drawing a vertical line from bottom-right to top-right
  while (($xChange == 0.0) && ($yChange < 0.0) && ($y >= 0.0)) {
   imagesetpixel($image, $x, $y, $color);
   $yChange += 1.0;
   $y -= 1.0;
  }
  // next is horizontal line from top right to top left
  $lineLength -= $lengthDecrement;
  $xChange = -$lineLength;
  $yChange = 0.0;
 } else {
  $lineLength = 0.0; // force exit from while loop
 }
}

// Output the image to the browser
header('Content-Type: image/png');
imagepng($image);

// Free memory
imagedestroy($image);
?>


