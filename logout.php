<?php
session_start();
session_unset();
session_destroy();
?>
<link href  = "appstyle.css?<?php echo time();?>" rel = "stylesheet" type = "text/css"/>
<link rel="shortcut icon" type="image/x-icon" href="madi.png" />
<html>
<html>
	<body>
		<div id = "container">
			<font style = "font-family: Comic Sans MS;">You have successfully logged out</font>
			<br><br>
			<a href = "/"><font style = "font-family: Comic Sans MS;">Welcome Page</font></a>
		</div>
	</body>
</html>
<?php
$loginerr = "";
echo "
<html>
<form name='redirect' action='/'>
<input hidden type='submit' value='Proceed'>
</form>
<script type='text/javascript'>
document.redirect.submit();
</script>
</html>";
?>
