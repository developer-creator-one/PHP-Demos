<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
<title>Name</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Name</h1>

<?php

/*
https://www.w3schools.com/php/
https://www.w3schools.com/php/php_sessions.asp
https://www.w3schools.com/php/php_forms.asp
https://www.w3schools.com/php/php_form_validation.asp
*/

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

if(isset($_POST["name"])) {
 $_SESSION["yourname"] = test_input($_POST["name"]);
}

$yourName = "";
if(isset($_SESSION["yourname"])) {
 $yourName = $_SESSION["yourname"];
 echo "Welcome " . $_SESSION["yourname"] . "<br>\n";
}

echo '<form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" method="post">';
echo 'Enter Your Name: <input type="text" name="name" value="' . $yourName . '"><br>';
echo '<input type="submit" value="Submit">';
echo '</form>';
echo "\n";

echo '<h2>Source Code</h2>';
echo "\n";
highlight_file(__FILE__);

?>

</body>
</html>

