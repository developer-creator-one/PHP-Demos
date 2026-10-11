<!DOCTYPE html>
<html>

<head>
<title>Cat Class</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Cat Class</h1>

<?php

// https://www.w3schools.com/php/php_oop_classes_objects.asp

class Cat {
  // Properties
  public $name;
  public $age;
  public $lifetimeMeowCount;
  public $lifetimePurrCount;
  public $lifetimeCountOfReceivedPats;

  // Method to set the properties
  function set_details($name, $age, $lifetimeMeowCount, $lifetimePurrCount, $lifetimeCountOfReceivedPats) {
    $this->name = $name;
    $this->age = $age;
    $this->lifetimeMeowCount = $lifetimeMeowCount;
    $this->lifetimePurrCount = $lifetimePurrCount;
    $this->lifetimeCountOfReceivedPats = $lifetimeCountOfReceivedPats;
  }

  // Method to display the properties
  function get_details() {
   echo "<h2>Cat Details</h2><p>";
   var_dump($this);
   echo "</p>\n";
  }
}

$dizzyGillespieCat = new Cat();
$dizzyGillespieCat->set_details('Dizzy', 1.6, 134, 183, 1521); // Set property values
$dizzyGillespieCat->get_details(); // Get output


?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

