<script src = "appscript.js" type = "text/javascript"></script>
<link rel="shortcut icon" type="image/x-icon" href="madi.png" />
<?php
session_start();
try
 {
   $servername = "mysql12.000webhost.com";
   $username = "a6655495_club";
   $password = "appclubsqlpass";
   $dbname = "clubusers";
   $table = "users";
   $conn = new PDO("mysql:host = $servername;dbname = $dbname",$username,$password);
   $conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	$conn->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
	if(isset($_POST['subreg']))
	{
		$fname = $_POST["fname"];
    echo "<script>console.log('$fname')</script>";
		$lname = $_POST["lname"];
    echo "<script>console.log('$lname')</script>";
		$emailreg = $_POST["email"];
    echo "<script>console.log('$emailreg')</script>";
		$passreg = $_POST["pass"];
    echo "<script>console.log('$passreg')</script>";
    $hashpass = md5($passreg);
    echo "<script>console.log('$hashpass')</script>";
		$day = $_POST["day"];
		echo "<script>console.log($day)</script>";
		$month = $_POST["month"];
		echo "<script>console.log($month)</script>";
		$year = $_POST["year"];
		echo "<script>console.log($year)</script>";
		$date = "'$year-$month-$day'";
    echo "<script>console.log($date)</script>";
		$sql = "INSERT INTO $dbname.$table VALUES ('$fname','$lname','$emailreg','$hashpass',$date)";
		$conn->exec($sql);
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
	else {
		echo "Please post to this page";
	}
}catch(PDOException $e)
	{
		echo "Connection failed or invalid Query : ".$e->getMessage();
	}

?>
