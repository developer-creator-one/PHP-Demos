<!DOCTYPE html>
<html>

<head>
<title>Trait</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Trait</h2>

<?php

trait CatNoises {
  public function meow($catName) {
    echo "The cat $catName meowed.<br>";
  }
}
trait DogNoises {
  public function woof($dogName) {
    echo "The dog $dogName barked.<br>";
  }
  public function walk($dogName) {
    echo "The dog $dogName went for a walk.<br>";
  }
}
class HelloCat {
  use CatNoises;
}
class HelloDog {
  use DogNoises;
}
class HelloPet {
  use CatNoises, DogNoises;
}
$obj = new HelloCat();
$obj->meow("Kitty1");
$obj2 = new HelloDog();
$obj2->woof("WoofyDog1");
$obj3 = new HelloPet();
$obj3->meow("Kitty2");
$obj3->woof("WoofyDog2");
?>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

