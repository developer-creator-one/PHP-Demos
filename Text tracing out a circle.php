<!DOCTYPE html>
<html>

<head>
<title>Text tracing out a circle</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<style>
svg {
      width: 200px;
      height: 200px;
      background: #f4f4f4;
    }
text {
      font-family: sans-serif;
      font-size: 20px;
      fill: #333;
      font-weight: bold;
}
</style>

</head>

<body>

<h2>Text tracing out a circle</h2>

<svg viewBox="0 0 200 200">
    <!-- Define the invisible circle path -->
    <defs>
      <path id="circlePath"/>
    </defs>
    <!-- Make the text follow the path -->
    <text>
      <textPath href="#circlePath" id="textNode" startOffset="0%">
        Hello, how are you?
      </textPath>
    </text>
</svg>

<script type="text/javascript">
function createSvgCirclePath(cx, cy, r) {
  // Move to the top of the circle, then draw two 180-degree arcs
  return `
    M ${cx} ${cy - r} 
    A ${r} ${r} 0 1 0 ${cx} ${cy + r} 
    A ${r} ${r} 0 1 0 ${cx} ${cy - r}
  `;
}
// Example Usage: Center (100, 100) with a radius of 50
const pathData = createSvgCirclePath(100, 100, 50);
// Inject into an existing SVG path element
document.getElementById("circlePath").setAttribute("d", pathData);

const textNode = document.getElementById('textNode');
let offset = 0;
// Optional: Animate the text around the square
function animate() {
      offset += 0.1; // Speed of the text
      if (offset > 100) offset = 0; // Reset loop
      textNode.setAttribute('startOffset', `${offset}%`);
      requestAnimationFrame(animate);
}
animate();
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

