<!DOCTYPE html>
<html>

<head>
<title>JavaScript Demo</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>JavaScript Demo</h1>

<div id="greetingId"></div>
<p>
Seconds Counter, since page loaded: <span id="secondsId"></span>
</p>

<script type="text/javascript">
function helloWorld(idToWrite) {
 document.getElementById(idToWrite).innerText = "Hello World";
}
helloWorld("greetingId");
var secondsCounter = 0;
setInterval(() => {
 secondsCounter += 1;
 document.getElementById("secondsId").innerText = secondsCounter.toString();
}, 1000);
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

