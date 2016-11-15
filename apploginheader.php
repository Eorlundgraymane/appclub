<style>
#appheader
{
	text-shadow: 5px 2px black;
	/*animation-name: slideLine;
	animation-duration: 7s;
	animation-iteration-count: 1;
	animation-timing-function: ease-in-out;*/
	transition-property: all;
	transition-duration: 0.1s;
	transition-timing-function: ease-in-out;
	position: fixed;
	top: 0;
	z-index: 999;
	background-color: #5e50a4;
	width: 100%;
	height: auto;
	font-size: 30px;
	color: #6ec855;
	font-family: Comic Sans MS;
	font-weight: bolder;
	padding-bottom: 20px;
	padding-left: 50px;
	height: 30px;
}
</style>
<div id = "appheader">
	APP Club
	<?php // if(!isset($_SESSION["sessionun"])|| empty($_SESSION["sessionun"])) include "loginpane.php"; ?>
</div>
