<!DOCTYPE HTML>
<html>
<head>
	<title>Music1</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
</head><body>

<h1>Music1</h1>

<p>
<button id="play">Play</button>
</p>

<!--
https://danigb.github.io/soundfont-player/
https://github.com/danigb/soundfont-player
-->
<script type="text/javascript" src="soundfont-player.min.js"></script>

<script type="text/javascript">
document.getElementById('play').addEventListener("click", function(e) {
  var ctx = new AudioContext();
  Soundfont.instrument(ctx, 'acoustic_grand_piano').then(function(instrument) {
  	 // Twinkle Twinkle Little Star (start of)
    var time = ctx.currentTime;
    instrument.play('E4', time).stop(time + 0.2);
    instrument.play('D4', time+0.2).stop(time + 0.4);
    instrument.play('C4', time+0.4).stop(time + 0.6);
    instrument.play('D4', time+0.6).stop(time + 0.8);
    instrument.play('E4', time+0.8).stop(time + 1.0);
    instrument.play('E4', time+1.0).stop(time + 1.2);
    instrument.play('E4', time+1.2).stop(time + 1.6);
    instrument.play('D4', time+1.6).stop(time + 1.8);
    instrument.play('D4', time+1.8).stop(time + 2.0);
    instrument.play('D4', time+2.0).stop(time + 2.4);
    instrument.play('E4', time+2.4).stop(time + 2.6);
    instrument.play('G4', time+2.6).stop(time + 2.8);
    instrument.play('G4', time+2.8).stop(time + 3.2);
    instrument.play('E4', time+3.2).stop(time + 3.4);
    instrument.play('D4', time+3.4).stop(time + 3.6);
    instrument.play('C4', time+3.6).stop(time + 3.8);
    instrument.play('D4', time+3.8).stop(time + 4.0);
    instrument.play('E4', time+4.0).stop(time + 4.2);
    instrument.play('E4', time+4.2).stop(time + 4.4);
    instrument.play('E4', time+4.4).stop(time + 4.6);
    instrument.play('E4', time+4.6).stop(time + 4.8);
    instrument.play('D4', time+4.8).stop(time + 5.0);
    instrument.play('D4', time+5.0).stop(time + 5.2);
    instrument.play('E4', time+5.2).stop(time + 5.4);
    instrument.play('D4', time+5.4).stop(time + 5.6);
    instrument.play('C4', time+5.6).stop(time + 6.4);
  });
});
</script>

<h2>Source code of this page</h2>
<?php
highlight_file(__FILE__);
?>

</body></html>

<!--
http://localhost/Music1.php
-->


