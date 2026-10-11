<!DOCTYPE html>
<html>

<head>
<title>Counting</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>Counting</h1>

<h2>Some computer code, so you can see I can program a website or software small snippets</h2>
<div id="countDiv"></div>
<div id="sourceCode"></div>
<script type="text/javascript">
const countDiv = document.getElementById("countDiv");
result = "Counting: ";
for (i=0; i<4; ++i) {
 result += i + ", ";
}
result += "4\n";
countDiv.innerText = result;
</script>

<h2>Source code of this page</h2>

<?php
highlight_file(__FILE__);
?>

</body>
</html>

