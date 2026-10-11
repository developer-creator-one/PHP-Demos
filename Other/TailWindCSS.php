<!DOCTYPE html>
<html>

<head>
<title>TailWindCSS</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta charset="UTF-8" />
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!--
https://tailwindcss.com/docs/installation/play-cdn
https://daily.dev/blog/tailwind-css-basics-for-beginners/
-->
</head>

<body>

<h1>TailWindCSS</h1>

<nav class="flex items-center justify-between p-4">
  <div>
    PHP Demo
  </div>
  <div> 
    <a href="Addition.php" target="_blank">Addition</a>&nbsp;|&nbsp;
    <a href="Add String vs Integer.php" target="_blank">Add String vs Integer</a>
  </div>
</nav>

<div class="border rounded shadow-lg opacity-50 overflow-x-scroll">
Hello Welcome
</div>

<p/><br><p/><hr><h2>Source Code</h2>
<?php highlight_file(__FILE__); ?>

</body>
</html>

