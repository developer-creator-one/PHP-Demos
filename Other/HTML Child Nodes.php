<!DOCTYPE html>
<html>

<head>
<title>HTML Child Nodes</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>HTML Child Nodes</h1>

<h2>Here is a list of all the child nodes of this page document</h2>
<div id="nodesList"></div>
<script type="text/javascript">
const nodesList = document.getElementById("nodesList");
const childNodes = document.body.childNodes;
result = "";
childNodes.forEach(node => {
 result += node.textContent + "\n";
});
nodesList.innerText = result;
</script>

<h2>Source code of this page</h2>

<?php
highlight_file(__FILE__);
?>

</body>
</html>

