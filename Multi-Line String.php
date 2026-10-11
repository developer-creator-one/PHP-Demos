<!DOCTYPE html>
<html>
<head>
<title>Cat Clauseo</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<h1>Cat Clause</h1>

<?php

echo("<p>The <b>cat</b> strikes again. More <b>cat</b> nonsense as computer code.</p>");

echo("<p>");
for ($i=0;$i<5;$i++) {
 echo($i . " ");
}
echo("</p>\n");

echo("<p>");
for ($j=0;$j<5;$j++) {
 echo($j . " ");
}
echo("</p>\n");

echo("<p>");
for ($j=5;$j>0;$j--) {
 echo($j . " ");
}
echo("</p>\n");

$str = <<<'EOD'
echo("<p>");
for ($i=0;$i<5;$i++) {
 echo($i . " ");
}
echo("</p>\n");
echo("<p>");
for ($j=0;$j<5;$j++) {
 echo($j . " ");
}
echo("</p>\n");
echo("<p>");
for ($j=5;$j>0;$j--) {
 echo($j . " ");
}
echo("</p>\n");
EOD;
echo("<p>");
highlight_string($str);
echo("</p>\n");

?>

</body>
</html>
