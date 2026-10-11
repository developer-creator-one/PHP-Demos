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
$height = $width;
$image = imagecreatetruecolor($width, $height);

/*
The formula for a circle is r^2 = (x-a)^2 + (y-b)^2
with (a,b) the offset of the circle, and r the radius.
When you rearrange it to y = ((+1 or -1)*sqrt((x-a)^2 - r^2)) + b
you can see that you need + and - for the top and bottom half
of the circle.
*/

// Determine the pixels and colour
$x = $width - 1.0;
$y = 0.0;
$circleRadius = $width/2.0 - 1.0;
$offset = $width/2.0;
$xChange = -1.0;
$red = 0;
$green = 0;
$blue = 255;
$color = imagecolorallocate($image, $red, $green, $blue);
while ($circleRadius > 0.1) {
 $sqrtNum = pow($circleRadius, 2)-pow(($x-$offset), 2);
 if ($sqrtNum >= 0) {
  $y = sqrt($sqrtNum)*(-$xChange)+$offset;
  imagesetpixel($image, $x, $y, $color);
 }
 $x += $xChange;
 if ($x < 0.0) {
  $x = 0.0;
  $xChange = 1.0;
 }
 if ($x > ($width-1.0)) {
  $x = $width-1.0;
  $xChange = -1.0;
 }
 $circleRadius -= 0.05;
}

// Output the image to the browser
header('Content-Type: image/png');
imagepng($image);

// Free memory
imagedestroy($image);
?>


