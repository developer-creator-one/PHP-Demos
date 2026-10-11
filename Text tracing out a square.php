<!DOCTYPE html>
<html>

<head>
<title>Text tracing out a square</title>
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

<h2>Text tracing out a square</h2>

<svg viewBox="0 0 200 200">
    <!-- Define the invisible square path -->
    <!-- Define a <path> for the square using M (move to), L (line to), and Z (close path) commands. -->
    <defs>
      <path id="squarePath" d="M 50 50 L 150 50 L 150 150 L 50 150 Z" />
    </defs>
    <!-- Make the text follow the path -->
    <text>
      <textPath href="#squarePath" id="textNode" startOffset="0%">
        Hello, how are you?
      </textPath>
    </text>
</svg>

<script type="text/javascript">
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

