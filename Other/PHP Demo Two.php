<!DOCTYPE html>
<html>

<head>
<title>PHP Demo Two</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>PHP Demo Two</h1>

<?php

// Check if the form was submitted using the POST method
$petType = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 if (isset($_POST['choice'])) {
  $petType = trim(strtolower(htmlspecialchars($_POST['choice'])));
 }
}

if (strlen($petType)>0) {
 switch ($petType) {
  case "siamese":
    echo "<p>I see you like Siamese cats. Siamese cats are special because they are the perfect mix of high-demand companionship and stunning, heat-activated genetics.</p>\n";
    break;
  case "burmese":
    echo "<p>I see you like Burmese cats. Burmese cats make exceptional pets for owners who want a highly affectionate, social, and interactive companion.</p>\n";
    break;
  case "chartreux":
    echo "<p>I see you like chartreux cats. While the Chartreaux will play, she actually doesn't need hourly attention. If she is in the mood to play, she will bring a toy to someone.</p>\n";
    break;
  default:
    echo "<p>That was not one of the three options to choose from.</p>\n";
    break;
 }
}

echo '<p><form method="post" action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '">' . "\n";
echo '<label>What breed of cat do you like best? Siamese, Burmese, or Chartreux: </label>' . "\n";
echo '<input type="text" name="choice">' . "\n";
echo '<input type="submit">' . "\n";
echo '</form></p>' . "\n";

/*

https://www.w3schools.com/php/
https://www.w3schools.com/php/php_switch.asp
https://stackoverflow.com/questions/6543841/php-cli-getting-input-from-user-and-then-dumping-into-variable-possible

*/

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

