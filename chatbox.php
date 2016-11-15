<?php
session_start();
$nextpage = "";
$newchaterr =
$clearerr = "";
$clearpage = "";
$dissy = "disabled";
$allow = "cursor: not-allowed";
if($_SERVER["REQUEST_METHOD"] === "POST")
{
	if(!isset($_SESSION["sessionun"])&&empty($_SESSION["sessionun"]))
	{
		$newchaterr = "Please login first";
	}
}
if(!isset($_SESSION["sessionun"])&&empty($_SESSION["sessionun"]))
{
	$nextpage = "/";
}
else
{
	$newchaterr = "";
	$nextpage = "chat.php";
	if($_SESSION["sessionun"]==="rkmenon235admin")
	{
		$clearpage = "clearchat.php";
		$dissy = "";
		$allow = "";
	}
	else
	{
		$dissy = "disabled";
		$allow = "cursor: not-allowed";
	}
}
?>
<style>
#scrapbook
{
	float: left;
	position: relative;
	top: 100px;
	width: 700px;
}
#clearer
{
	<?php echo $allow;?>;
}
textarea
{
	box-shadow: 3px 3px black;
}
legend
{
	color: white;
}
</style>
<div id = "scrapbook">
	<fieldset id = "chatbox">
		<legend>Notice Board</legend>
		<form action = "<?php echo $nextpage;?>" method = "POST">
			<textarea cols = "50" rows = "15" readonly id = "posts" name = "posts" height="auto" placeholder="be the first to chat"></textarea>
			<br><br>
			<input type = "text" name = "newchat" id = "newchat">
			<br><br>
			<button type = "submit" name = "subchat" id = "subchat">Post</button> <?php echo $newchaterr;?><br>
		</form>
		<form action = "<?php echo $clearpage;?>" method = "POST">
			<button <?php echo $dissy ;?> type = "submit" name = "clearer" id  = "clearer">Clear Chats</button><?php echo $clearerr;?><br>
		</form>
		<form action = "logout.php">
			<button type = "submit" name = "logout" id = "logout">Log out</button>
		</form>
	</fieldset>
</div>
<script>
function scrolly()
{
	var textarea = document.getElementById("posts");
	textarea.scrollTop = textarea.scrollHeight;
}
function firstchat()
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState == 4 && xmlhttp.status === 200)
		{
			texty = document.getElementById("posts");
			texty.innerHTML = this.responseText;
			alert("firstchat");
		}
	}
}
function feedchat()
{
	var xmlhttp = new XMLHttpRequest();
	xmlhttp.onreadystatechange = function()
	{
		if(xmlhttp.readyState === 4 && xmlhttp.status === 200)
		{
			texty = document.getElementById("posts");
			if(!((texty.innerHTML)===this.responseText))
			{
				texty.innerHTML = this.responseText;
				notifyMe((this.responseText.split("\n")[0]),this.responseText.split("\n")[0]+" Just posted : "+(this.responseText.split("\n")[1]).split(":")[3]);
			}
		}
	};
	xmlhttp.open("GET","chat.php",true);
	xmlhttp.send();
}
setInterval(feedchat,1000);
</script>
