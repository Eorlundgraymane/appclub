<?php
session_start();
$newchat = $newchaterr = "";
$chat = "";
$chatfile = fopen("chattext.txt","a+") or die("Unable to open chat file");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
  if(isset($_SESSION["sessionun"])&&!empty($_SESSION["sessionun"]))
  {
    $newchat = "Cleared By\n";
    date_default_timezone_set("Asia/Kolkata");
    $newchat = $newchat."Admin"."\nOn ".date("h:i:sa");
    file_put_contents("chattext.txt",$newchat);
    fclose($chatfile);
    echo "
    <html>
    <form name='redirect' action='index.php' method='POST'>
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
