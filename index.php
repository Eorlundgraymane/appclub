<link href  = "appstyle.css?<?php echo time();?>" rel = "stylesheet" type = "text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="madi.png" />
<html>
	<title>App|Club</title>

	<?php
	$loginerr;
	session_start();
	if((isset($_SESSION["sessionun"]))&&(!empty($_SESSION["sessionun"])))
		include 'welcomebanner.php';
	if($_SERVER["REQUEST_METHOD"] != "POST")
		include 'welcomeslide.php';
	?>
	<style>
	audio
	{
		opacity: 0.2;
		box-shadow: 2px 2px black;
		transition-duration: 0.2s;
		transition-timing-function: ease-in-out;
	}
	audio:hover
	{
		opacity: 1;
	}
	</style>
	<body>
		<!--<div id="background-wrap">
    <div class="bubble x1"></div>
    <div class="bubble x2"></div>
    <div class="bubble x3"></div>
    <div class="bubble x4"></div>
    <div class="bubble x5"></div>
    <div class="bubble x6"></div>
    <div class="bubble x7"></div>
    <div class="bubble x8"></div>
    <div class="bubble x9"></div>
    <div class="bubble x10"></div>
		</div>-->
		<div id  = "container">
			<?php include 'apploginheader.php';?>
			<!--<audio autoplay id = "bm" loop onloadeddata = "halfv()"><source src = "Appclub.mp3" type = "audio/mp3"></audio>-->
			<?php if(isset($_SESSION["sessionun"])&& !empty($_SESSION["sessionun"])){include 'chatbox.php'; echo "<br><br>";}
						else {
							include 'welcomeslab.php';
						}
			?>
			<?php //include 'regpane.php';?><br>
			<?php include 'appfooter.php';?>
		</div>
	</body>
</html>
<script src = "appscript.js?<?php echo time();?>" type = "text/javascript">
</script>
<script>
function halfv()
	{
document.getElementById("bm").volume = 0.5;
	}
	</script>
