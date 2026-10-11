<!DOCTYPE html>
<html>

<head>
<title>JavaScript Animation One</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h1>JavaScript Animation One</h1>

<div class="main">

<img src="ComputerIcon.jpg" width="100px" id="ComputerIcon" style="position:absolute;">
<h2 id="FirstHeader">Here is some web computer code</h2>
<p/><br>
<div id="ComputerPositionText">Computer Position: </div>

<script>

function getTextWidth(text, font) {
  // Create a dummy canvas context
  const canvas = document.createElement("canvas");
  const ctx = canvas.getContext("2d");
  // Set the target font style (e.g., "16px Arial")
  ctx.font = font;  
  // Measure and return the width in pixels
  const metrics = ctx.measureText(text);
  return metrics.width;
}
function measureWithDOM(text, fontSize) {
  const span = document.createElement("span");
  span.style.fontSize = fontSize;
  span.style.whiteSpace = "nowrap";
  span.style.visibility = "hidden";
  span.textContent = text;
  document.body.appendChild(span);
  const pixelWidth = span.getBoundingClientRect().width;
  document.body.removeChild(span);
  return pixelWidth;
}

const computerIconElement = document.getElementById("ComputerIcon");
const headerElement = document.getElementById("FirstHeader");
computerIconElement.style.left = "0px";
computerIconElement.style.top = document.getElementById("FirstHeader").getBoundingClientRect().top;
let leftPositionComputer = 0;

const computedStyle = window.getComputedStyle(headerElement);
const headerFont = computedStyle.fontFamily;
const headerFontSize = computedStyle.fontSize;
//const headerWidth = getTextWidth(headerElement.innerText, headerFont);
const headerWidth = parseInt(measureWithDOM(headerElement.innerText, headerFontSize), 10);
const leftPosition = headerElement.getBoundingClientRect().left;
const rightPosition = leftPosition + headerWidth;
let directionRight = 1;
const ComputerPositionTextElement = document.getElementById("ComputerPositionText");
setInterval(() => {
  computerIconElement.style.left = leftPositionComputer.toString() + "px";
  ComputerPositionTextElement.innerText = "Computer Positioning, X-Range:" + leftPosition.toString()+" to "+rightPosition.toString()+", Left:"+leftPositionComputer.toString()+", Direction:"+directionRight.toString();
  if (directionRight) {
   leftPositionComputer += 5;
   if (leftPositionComputer > rightPosition) {
    directionRight = 0;
    leftPositionComputer = rightPosition;
   }
  }
  if (!directionRight) {
   leftPositionComputer -= 5;
   if (leftPositionComputer < leftPosition) {
    directionRight = 1;
    leftPositionComputer = leftPosition;
   }
  }
}, 100);
</script>

<?php
$programmingLanguage = "PHP";
$str = "<p>This web page is written in $programmingLanguage";
$str = $str . ". \nHere is the computer code for this paragraph.</p>\n";
echo($str);
echo('<div id="codeDemo"><p>');
highlight_string('<?php echo("' . $str . '"); ?>');
echo("</p></div>\n");
?>
<p>Hex Background Color: <span id="hexColor"></span></p>

</div> <!-- class main -->

<h2>Here are some website links for learning Web Programming</h2>

<ol>
<li><a href="https://programminghub.io/" target="_blank">Programming Hub</a></li>
<li><a href="https://www.w3schools.com/" target="_blank">W3 Schools</a></li>
</ol>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

<script type="text/javascript">
const codeDemoElement = document.getElementById("codeDemo");
const hexColorElement = document.getElementById("hexColor");
const codeDemoBgColorGreenMin = 200;
const codeDemoBgColorGreenMax = 230;
let codeDemoBgColorGreen = codeDemoBgColorGreenMin;
let colorDirection = 1;
setInterval(() => {
 let hex = codeDemoBgColorGreen.toString(16);
 codeDemoElement.style.backgroundColor = "#B0" + hex + "B0";
 hexColorElement.innerText = codeDemoElement.style.backgroundColor;
 if (colorDirection) {
  codeDemoBgColorGreen += 1;
  if (codeDemoBgColorGreen > codeDemoBgColorGreenMax) {
   codeDemoBgColorGreen = codeDemoBgColorGreenMax;
   colorDirection = 0;
  }
 } else {
  codeDemoBgColorGreen -= 1;
  if (codeDemoBgColorGreen < codeDemoBgColorGreenMin) {
   codeDemoBgColorGreen = codeDemoBgColorGreenMin;
   colorDirection = 1;
  }
 }
}, 100);
</script>

</body>
</html>

