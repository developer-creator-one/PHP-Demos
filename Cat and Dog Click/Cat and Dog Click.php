<!DOCTYPE html>
<html>

<head>
<title>Cat and Dog Click</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Cat and Dog Click</h2>

<p>First click on the cat, then click on the dog.</p>

<img id="Image1" onclick="Image1Click();" width="100px"><br>
<img id="Image2" onclick="Image2Click();" width="100px"><br>
<div id="response"></div>

<script type="text/javascript">
const img1 = document.getElementById('Image1');
const img2 = document.getElementById('Image2');
const response = document.getElementById('response');
let randomBoolean = false;
let firstClicked = 0;
let secondClicked = 0;
initialize();
function Image1Click() {
 if (firstClicked == 0) {
  firstClicked = 1;
  if (!randomBoolean) { // first image is Dog
   response.innerText = "Incorrect, you clicked on the dog first, please click on the cat first.";
   firstClicked = 0;
  } else {
   response.innerText = "Correct, you clicked on the cat first, now click on the dog second.";
  }
 } else {
  secondClicked = 1;
  if (!randomBoolean) { // first image is Dog
   response.innerText = "Correct, you clicked on the cat and then dog.";
   playMeow();
   initialize();
  } else { // first image is Cat
   response.innerText = "Incorrect, you clicked on the cat and then cat, please click on the dog.";
   secondClicked = 0;
  }
 }
}
function initialize() {
 firstClicked = 0;
 secondClicked = 0;
 randomBoolean = Math.random() < 0.5;
 if (randomBoolean) {
  img1.src = 'Cat.jpeg';
  img2.src = 'Dog.jpeg';
 } else {
  img2.src = 'Cat.jpeg';
  img1.src = 'Dog.jpeg';
 }
}
function playMeow() {
	let audioFile = "meow-1.mp3";
	// https://www.myinstants.com/en/search/?name=meow
	var audio = new Audio(audioFile);
   audio.play().catch(error => {
     console.log("Playback prevented by browser autoplay policy:", error);
   });
}
function playWoof() {
	let audioFile = "dog-woof-woof.mp3";
	// https://www.myinstants.com/en/search/?name=woof
	var audio = new Audio(audioFile);
   audio.play().catch(error => {
     console.log("Playback prevented by browser autoplay policy:", error);
   });
}
function Image2Click() {
 if (firstClicked == 0) {
  firstClicked = 2;
  if (!randomBoolean) { // first image is Dog
   response.innerText = "Correct, you clicked on the cat first, now click on the dog second.";
  } else {
   response.innerText = "Incorrect, you clicked on the dog first, please click on the cat first.";
   firstClicked = 0;
  }
 } else {
  secondClicked = 2;
  if (randomBoolean) { // first image is Cat
   response.innerText = "Correct, you clicked on the cat and then dog.";
   playWoof();
   initialize();
  } else { // first image is Dog
   response.innerText = "Incorrect, you clicked on the cat and then cat, please click on the dog.";
   secondClicked = 0;
  }
 }
}
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

