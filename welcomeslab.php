<style>
#welcomeslab
{
  float: left;
  position: relative;
  font-size: 30px;
  font-family: Comic Sans MS;
  text-shadow: 2px 2px black;
  top: 100px;
  color: #6ec855;
  padding-left: 10px;
}
</style>
<div id  = "welcomeslab">
  Site going under a major Update.<br>
  User registrations coming soon....
  <br><p id = "clock"></p>
</div>
<script>
function countdown()
{
  var d =  new Date();
  var clock = d.getTime();
  var s = 1000;
  var m = s*60;
  var h = m*60;
  var d = h*24;
  var lastday = 17122;
  var cd = (lastday - Math.round(clock/d));
  var ch = (lastday*24 - Math.round(clock/h))%24;
  var cm = (lastday*24*60 - Math.round(clock/m))%60;
  var cs = (lastday*24*60*60 - Math.round(clock/s))%60;
  if(cd>0)
  document.getElementById("clock").innerHTML = cd+"day "+ch+" hours "+cm+" minutes and "+cs+" seconds left";
  else if(ch>0)
  document.getElementById("clock").innerHTML = ch+" hours "+cm+" minutes and "+cs+" seconds left";
  else if(cm>0)
  document.getElementById("clock").innerHTML = cm+" minutes and "+cs+" seconds left";
  else if(cs>0)
  document.getElementById("clock").innerHTML = cs+" seconds left";
  else {
    document.getElementById("clock").innerHTML = "<a href = '/'>Reload Website</a>";
  }
}
timer = setInterval(countdown,1000);
</script>
