<style>
#welcomeslide
{
	text-shadow: 3px 2px black;
	font-weight: bolder;
	position: absolute;
	opacity: 0;
	z-index: 10;
	line-height: 400px;
	text-align: center;
	width:  0;
	height: 0;
	font-size: 40px;
	font-family: Comic Sans MS;
	color: #5e50a4;
	animation-name: welcome;
	animation-duration: 4s;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
	background-color: #159230;
}
#logo
{
	animation-name: fadeIn;
	animation-duration: 1s;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
}
#line
{
	box-shadow: 2px 2px black;
	animation-name: slideLine;
	background-color: #5e50a4;
	height: 10px;
	animation-duration: 2s;
	animation-iteration-count: 1;
	animation-timing-function: ease-in;
}
#tm
	{
		animation-name: fadeIn;
		animation-duration: 1.5s;
		animation-iteration-count: 1;
		animation-timing-function: ease-out;
		position: relative;
		bottom: 410px;
		left: 100px;
	}
</style>
<audio id = "tmm"><source src = "tm.mp3"></audio>
<div id = "welcomeslide">
	<div id = "logo">APP Club<div id = "line"></div></div><div id  = "tm">&trade;</div>
</div>
<script src="tm.js?<?php echo time();?>"></script>
