<?php
session_start();
	$newchat = $newchaterr = "";
	$chat = "";
	$chatfile = fopen("chattext.txt","a+") or die("Unable to open chat file");
	if($_SERVER["REQUEST_METHOD"] == "POST")
	{
		if(isset($_SESSION["sessionun"])&&!empty($_SESSION["sessionun"]))
		{
			$newchat = $_POST["newchat"];
			date_default_timezone_set("Asia/Kolkata");
			$newchat = $_SESSION["sessionun"]."\n".date("h:i:sa").":  ".$newchat."\n";
			$newchat = $newchat."\n".file_get_contents("chattext.txt");
			file_put_contents("chattext.txt",$newchat);
			fclose($chatfile);
			echo "
			<html>
			<form name='redirect' action='/' method='POST'>
			<input hidden type='submit' value='Proceed'>
			</form>
			<script type='text/javascript'>
			document.redirect.submit();
			</script>
			</html>";
		}
		else
		{
			$newchaterr = "please login first";
		}
	}
	else
	{
		fclose($chatfile);
		$chatfile = fopen("chattext.txt","r") or die("Unable to open chat file");
		$chat = fread($chatfile,filesize("chattext.txt"));
		echo $chat;
		fclose($chatfile);
	}
?>
