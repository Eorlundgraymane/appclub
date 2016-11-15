<style>
	input
	{
		border-radius: 10px;
		padding-left: 10px;
		font-size: 10px;
	}
	#loginpane
	{
		font-family: Comic Sans MS;
		/*animation-name: fadeIn;
		animation-duration: 9s;
		animation-iteration-count: 1;
		animation-timing-function: ease-in;*/
		position: relative;
		right: 50px;
		padding-right: 20px;
		width: auto;
		float: right;
	}
	#loginerr
	{
		float: right;
		font-size: 25px;
		text-shadow: 1px 2px black;
	}
</style>
<div id = "loginpane">
		<form id = "login" action = "homepage.php" method = "POST" name = "login">
			<input type = "text" name = "userin" id = "userin" placeholder = "Username">
			<input type = "password" name = "passin" id = "passin" placeholder = "Password">
			<button type = "submit" form = "login" name = "sublog" id = "sublog">Log In</button>
			<?php if(($_SERVER["REQUEST_METHOD"] ==="POST")&&(!isset($_SESSION["sessionun"])&&empty($_SESSION["sessionun"]))) {echo '<br><p id = "loginerr">Username or Password Incorrect</p>';}?>
		</form>
</div>
