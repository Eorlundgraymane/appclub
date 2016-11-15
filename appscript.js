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
var piclink = "";
function notifyMe(id,message) {
  if (!Notification) {
    alert('Desktop notifications not available in your browser. Try Chromium.');
    return;
  }
  if (Notification.permission !== "granted")
    Notification.requestPermission();
  else {
		var x = new XMLHttpRequest();
		x.onreadystatechange = function()
			{
			if(x.readyState === 4 && x.status === 200)
				{
				var doc = x.responseText;
				piclink =(((doc.split("<gphoto:thumbnail>")[0]).split("{")[17]).split(":")[1]).concat(":",(((doc.split("<gphoto:thumbnail>")[0]).split("{")[17]).split(":")[2])).replace(/"/g,"").replace(/}/g,"");
				console.log(piclink);
				var notification = new Notification(message, {
					icon: piclink,
					body: "Just Posted on APP Club",
				});
					notification.onclick = function () {
					window.open("http://eorlundgraymane.coolpage.biz");
				};
				}
				}
				x.open('GET','http://picasaweb.google.com/data/entry/api/user/'.concat((id).split("@")[0],"?alt=json"),true);
				x.send();
  }
}
