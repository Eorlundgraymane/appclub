<?php header("Content-type: application/javascript");?>
function submit()
{
	document.getElementById("login").submit();
}
function test_input($data)
{
	$data = stripslashes($data);
	$data = trim($data);
	$data = htmlspecialchars($data);
	return($data);
}
// request permission on page load
document.addEventListener('DOMContentLoaded', function () {
  if (Notification.permission !== "granted")
    Notification.requestPermission();
});

function notifyMe(message) {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.');
    return;
  }
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
    var notification = new Notification(message, {
      icon: 'http://picasaweb.google.com/data/entry/api/user/?alt=json',
      body: "Just Posted on APP Club",
    });

    notification.onclick = function () {
      window.open("http://eorlundgraymane.coolpage.biz");
    };

  }

}
