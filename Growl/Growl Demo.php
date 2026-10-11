<!DOCTYPE html>
<html>

<head>
<title>Growl Demo</title>
<!-- https://github.com/aamasri/growl-js/tree/master -->
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link rel="stylesheet" type="text/css" href="dist/chunk_growl.css">
<script src="dist/chunk_anime.js" type="text/javascript"></script>
<script src="dist/chunk_dom-utils.js" type="text/javascript"></script>
<script src="dist/chunk_growl.js" type="text/javascript"></script>
<script src="dist/chunk_jquery.js" type="text/javascript"></script>
<script src="dist/growl.js" type="text/javascript"></script>
<!-- In growl.js I changed chunk_growl.css to dist/chunk_growl.css -->
</head>

<body>

<h1>Growl Demo</h1>

<button id="myButton">Click Me</button>
<script type="text/javascript">
    const btn = document.getElementById("myButton");
    btn.addEventListener("click", function(event) {
        growl({ message: 'You clicked on me',
         type: 'info',
         target: event.target,
         overwrite: true
        });
    });
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

