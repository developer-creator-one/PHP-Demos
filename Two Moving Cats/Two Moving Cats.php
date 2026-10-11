<!DOCTYPE html>
<html>

<head>
<title>Two Moving Cats</title>
<meta name="robots" content="index, follow, snippet, imageindex">
<meta name="googlebot" content="index, follow, snippet, imageindex">
<meta name="googlebot-news" content="index, follow, snippet, imageindex">
<link rel="stylesheet" type="text/css" href="/styles.css">
<link rel="icon" type="image/x-icon" href="/favicon.ico">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

<h2>Two Moving Cats</h2>

<canvas id="myCanvas1"></canvas>
<canvas id="myCanvas2"></canvas>
<div id="destination"></div>

<script>

function getRandomIntInclusive(min, max) {
  const minCeiled = Math.ceil(min);
  const maxFloored = Math.floor(max);
  // The maximum is inclusive and the minimum is inclusive
  return Math.floor(Math.random() * (maxFloored - minCeiled + 1) + minCeiled); 
}

function drawTextOnImage(myCanvasId, myImageId, catNumber) {
    // 1. Get the canvas element and its 2D rendering context
    const canvas = document.getElementById(myCanvasId);
    const ctx = canvas.getContext('2d');
    // 2. Create a new image object
    const img = new Image();
    img.id = myImageId;
    // Handle cross-origin issues if loading from an external URL
    img.crossOrigin = 'anonymous'; 
    // 3. Define what happens once the image has fully loaded
    img.onload = function() {
        // Set canvas dimensions to match the source image
        const imgOriginalWidth = img.width;
        const imgOriginalHeight = img.height;
        canvas.width = 150;
        canvas.height = 150.0/imgOriginalWidth*imgOriginalHeight;
        // Draw the image starting at the top-left corner (0,0)
        ctx.drawImage(img, 0, 0, imgOriginalWidth, imgOriginalHeight,
         0, 0, canvas.width, canvas.height);
        // 4. Configure text styles
        ctx.font = 'bold 40px sans-serif';     // Set font size and family
        ctx.fillStyle = 'white';               // Set text color
        ctx.strokeStyle = 'black';             // Set text outline color
        ctx.lineWidth = 4;                     // Set outline thickness
        ctx.textAlign = 'center';              // Horizontal alignment
        // 5. Render the text onto the image
        const text = "Cat "+catNumber;
        const xPosition = canvas.width / 2;    // Centered horizontally
        const yPosition = canvas.height - 50;  // 50px up from the bottom
        // Draw outline first, then fill so the text stays crisp
        ctx.strokeText(text, xPosition, yPosition);
        ctx.fillText(text, xPosition, yPosition);
    };
    // 4. Set the source URL to trigger the loading process
    img.src = 'Cat.webp'; 
}
const canvas1 = document.getElementById('myCanvas1');
const canvas2 = document.getElementById("myCanvas2");
function setupMovement() {
 const imageWidth = parseInt(canvas1.width, 10);
 const imageHeight = parseInt(canvas1.height, 10);
 const positionIncrement = 10;
 const positionIncrementHalf = positionIncrement/2.0;
 canvas1.style.position = "absolute";
 canvas2.style.position = "absolute";
 canvas1.style.left = "0px";
 canvas1.style.top = "0px";
 canvas2.style.left = "0px";
 canvas2.style.top = "0px";
 var positionOneXNew = parseInt(canvas1.style.left.slice(0,-2), 10);
 var positionOneYNew = parseInt(canvas1.style.top.slice(0,-2), 10);
 var positionTwoXNew = parseInt(canvas2.style.left.slice(0,-2), 10);
 var positionTwoYNew = parseInt(canvas2.style.top.slice(0,-2), 10);
 const timerId = setInterval(() => {
 
  var positionOneX = parseInt(canvas1.style.left.slice(0,-2), 10);
  var positionOneY = parseInt(canvas1.style.top.slice(0,-2), 10);
  var positionTwoX = parseInt(canvas2.style.left.slice(0,-2), 10);
  var positionTwoY = parseInt(canvas2.style.top.slice(0,-2), 10);

  if ((positionOneX-positionOneXNew)>positionIncrementHalf) {
   positionOneX -= positionIncrement;
  }
  if ((positionOneXNew-positionOneX)>positionIncrementHalf) {
   positionOneX += positionIncrement;
  }
  positionOneXReached = (Math.abs(positionOneXNew-positionOneX) <= positionIncrementHalf);
  canvas1.style.left = positionOneX.toString() + "px";
  
  if ((positionOneY-positionOneYNew)>positionIncrementHalf) {
   positionOneY -= positionIncrement;
  }
  if ((positionOneYNew-positionOneY)>positionIncrementHalf) {
   positionOneY += positionIncrement;
  }
  positionOneYReached = (Math.abs(positionOneYNew-positionOneY) <= positionIncrementHalf);
  canvas1.style.top = positionOneY.toString() + "px";
  
  if (positionOneXReached && positionOneYReached) {
   positionOneXNew = getRandomIntInclusive(0, window.innerWidth-imageWidth);
   positionOneYNew = getRandomIntInclusive(0, window.innerHeight-imageHeight);
  }

  if ((positionTwoX-positionTwoXNew)>positionIncrementHalf) {
   positionTwoX -= positionIncrement;
  }
  if ((positionTwoXNew-positionTwoX)>positionIncrementHalf) {
   positionTwoX += positionIncrement;
  }
  positionTwoXReached = (Math.abs(positionTwoXNew-positionTwoX) <= positionIncrementHalf);
  canvas2.style.left = positionTwoX.toString() + "px";

  if ((positionTwoY-positionTwoYNew)>positionIncrementHalf) {
   positionTwoY -= positionIncrement;
  }
  if ((positionTwoYNew-positionTwoY)>positionIncrementHalf) {
   positionTwoY += positionIncrement;
  }
  positionTwoYReached = (Math.abs(positionTwoYNew-positionTwoY) <= positionIncrementHalf);
  canvas2.style.top = positionTwoY.toString() + "px";

  if (positionTwoXReached && positionTwoYReached) {
   positionTwoXNew = getRandomIntInclusive(0, window.innerWidth-imageWidth);
   positionTwoYNew = getRandomIntInclusive(0, window.innerHeight-imageHeight);
  }
  
  document.getElementById("destination").innerText = "Cats Destination: (" + positionOneXNew + "," + positionOneYNew + ") and (" + positionTwoXNew + "," + positionTwoYNew+")";
 }, 100);
}
function drawTextOnImageBoth()
{
 drawTextOnImage("myCanvas1", "CatImage1", "1");
 drawTextOnImage("myCanvas2", "CatImage2", "2");
 setupMovement();
}
window.onload=drawTextOnImageBoth;

</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body>
</html>

