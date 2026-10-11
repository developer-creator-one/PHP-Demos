<!DOCTYPE html>
<html>

<head>
<title>Clock</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Clock</h2>

<canvas id="myCanvas" width="200" height="200" style="border:1px solid cyan;">
</canvas>

<p>
<form>
<input type="checkbox" id="optionBackwards" name="optionBackwards" value="optionBackwards">
<label for="optionBackwards">Clock runs backwards in time</label><br>
<input type="checkbox" id="option10TimesAsFast" name="option10TimesAsFast" value="option10TimesAsFast">
<label for="option10TimesAsFast">Clock runs ten times as fast</label><br>
</form>
</p>

<script type="text/javascript">

// https://www.w3schools.com/jsref/api_canvas.asp

const checkboxOptionBackwards = document.getElementById("optionBackwards");
const checkboxOption10TimesAsFast = document.getElementById("option10TimesAsFast");

const canvas = document.getElementById("myCanvas");
const ctx = canvas.getContext("2d");

const halfCanvasWidth = canvas.width/2.0;
const halfCanvasHeight = canvas.height/2.0;
const radius = Math.min(halfCanvasWidth,halfCanvasHeight)-20;

const now = new Date();
var hours = now.getHours();
var minutes = now.getMinutes();
var seconds = now.getSeconds();
var hoursAngle = 0;
var minutesAngle = 0;
var secondsAngle = 0;
var amPm = "AM";
if (hours > 12) {
 hours -= 12;
 amPm = "PM";
}

function drawClockLine(angle, strokeStyle) {
 ctx.strokeStyle = strokeStyle;
 ctx.beginPath();
 ctx.moveTo(halfCanvasWidth, halfCanvasHeight);
 ctx.lineTo(radius*Math.cos(angle)+halfCanvasWidth, -radius*Math.sin(angle)+halfCanvasHeight);
 ctx.stroke();
}

const intervalId = setInterval(() => {

 ctx.clearRect(0, 0, canvas.width, canvas.height);

 // circle
 ctx.beginPath();
 ctx.arc(halfCanvasWidth, halfCanvasHeight, radius, 0, 2 * Math.PI);
 ctx.stroke(); 

 // add numbers 1 to 12 to just inside the circle
 for (var digit = 1; digit <= 12; ++digit) {
  var angle = 2*Math.PI-(digit-3)/12*2*Math.PI;
  ctx.font = "20px Georgia";
  ctx.fillText(digit.toString(), radius*Math.cos(angle)+halfCanvasWidth-5, -radius*Math.sin(angle)+halfCanvasHeight+10);
 }

 hoursAngle = 2*Math.PI-(((hours*5+minutes/60.0*5)-15)/60)*2*Math.PI;
 minutesAngle = 2*Math.PI-((minutes-15)/60)*2*Math.PI;
 secondsAngle = 2*Math.PI-((seconds-15)/60)*2*Math.PI;

 // Add digital clock text in centre
 timeText = hours.toString() + ":" + minutes.toString() + ":" + seconds.toString() + " " + amPm;
 ctx.font = "20px Georgia";
 ctx.fillStyle = "purple";
 ctx.fillText(timeText, radius-30, halfCanvasHeight);

 // add hours, minutes, seconds hand lines
 drawClockLine(hoursAngle, "blue");
 drawClockLine(minutesAngle, "orange");
 drawClockLine(secondsAngle, "green");

 var secondsIncrement = 1;
 if (checkboxOption10TimesAsFast.checked) {
  secondsIncrement = 10;
 }
 for (var incrementCount = 0; incrementCount<secondsIncrement; ++incrementCount) {
  if (!checkboxOptionBackwards.checked) {
   seconds += 1;
   if (seconds>=60) {
    seconds = 0;
    minutes += 1;
    if (minutes >=60) {
     minutes = 0;
     hours += 1;
     if (hours >= 12) {
      hours = 0;
     }
    }
   }
  } else {
   seconds -= 1;
   if (seconds<0) {
    seconds = 59;
    minutes -= 1;
    if (minutes <0) {
     minutes=59;
     hours -= 1;
     if (hours<0) {
      hours=11;
     }
    }
   }
  }
 }

}, 1000); // Runs every 1000 milliseconds (1 second)

</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

