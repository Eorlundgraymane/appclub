<script src = "appscript.js" type = "text/javascript"></script>
	<link rel="shortcut icon" type="image/x-icon" href="madi.png" />
<?php
	try
	 {
		$servername = "mysql12.000webhost.com";
		$username = "a6655495_club";
		$password = "appclubsqlpass";
		$dbname = "clubusers";
		$table = "users";
		$conn = new PDO("mysql:host = $servername;dbname = $dbname",$username,$password);
		$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	}catch(PDOException $e)
	{
		echo "Connection failed or invalid Query : ".$e->getMessage();
	}
	if(isset($_POST['sublog'])){
		$userin = $_POST['userin'];
		$passin = $_POST['passin'];
		$hashin = md5($passin);
		$sql = "SELECT COUNT('email') FROM $dbname.$table WHERE email like '$userin' and password like '$hashin'";
		$result = $conn->prepare($sql);
		$result->execute();
		$count = $result->fetchColumn();
		if($count == "1"){
		echo "Logged In successfully";
		session_start();
		$_SESSION["sessionun"] = $userin;
		$_SESSION["sessionpw"] = $passin;
		setrawcookie($userin,$passin,time()+(86400*30),"/");
		$loginerr = "";
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
		else {
			session_destroy();
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
	}
	else {
		session_destroy();
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



/*
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{

}
echo "You have logged in with the email ".$_SESSION["sessionem"]."<br>";
?>
<?php
$emailin = $passin = "";
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	if(count($_COOKIE)>0)
	{
		echo "Cookies are enabled <br>";
		$emailin = $_SESSION["sessionem"];
		$emailin = substr($emailin,0,strpos($emailin,"@"));
		$passin = $_SESSION["sessionpw"];
		setrawcookie($emailin,$passin,time()+(86400*30),"/");
	}
	else
	echo "Cookies are disabled <br>";
}
?>
<html>
	<title><?php echo $emailin;?></title>
<body>
<?php
if(!isset($_COOKIE[$emailin]))
{
	echo "Cookie named '".$emailin."' is not set <br><button id = 'home'><a href = 'index.php'>APP Club</a></button>";
}
else
{
	echo "Cookie '".$emailin."' is set <br><button id = 'home'><a href = 'index.php'>APP Club</a></button>";
}
echo "
<html>
<form name='redirect' action='index.php' method='POST'>
<input hidden type='submit' value='Proceed'>
</form>
<script type='text/javascript'>
document.redirect.submit();
</script>
</html>";
?>
</body>
</html>
*/
?>
