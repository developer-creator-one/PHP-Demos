<!DOCTYPE html>
<html>

<head>
<title>Spin Text with Speed Slider</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
  .container {
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100px;
    perspective: 1000px; /* Enables 3D depth */
  }
  #spinning-text {
    font-size: 3rem;
    font-family: sans-serif;
    transition: transform 0.1s linear;
  }
</style>

</head>

<body>

<h2>Spin Text with Speed Slider</h2>

<!-- https://www.w3schools.com/howto/howto_js_rangeslider.asp -->
<p>
<input type="range" min="1" max="10" step="0.1" value="2" id="inputSpeed">
</p>

<div class="container">
  <span id="spinning-text">Hello</span>
</div>

<script type="text/javascript">
const textElement = document.getElementById('spinning-text');
const speedElement = document.getElementById("inputSpeed");
let speed = 2; // default
let angle = 0;
function spin() {
  speed = parseInt(speedElement.value, 10);
  angle = (angle + speed); // Adjust '2' to change speed
  if (angle > Number.MAX_SAFE_INTEGER-360) {
   angle = 0;
  }
  // Use rotateY for a 3D coin spin, or rotate() for a 2D pinwheel spin
  textElement.style.transform = `rotate(${angle}deg)`;
  requestAnimationFrame(spin);
}
spin();
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

