<?php
include("../res/x5engine.php");
$nameList = array("rrx","mk7","kuy","zgu","es4","wgf","g33","fe3","mw7","u4s");
$charList = array("Y","P","Y","3","2","A","3","J","6","X");
$cpt = new X5Captcha($nameList, $charList);
//Check Captcha
if ($_GET["action"] == "check")
	echo $cpt->check($_GET["code"], $_GET["ans"]);
//Show Captcha chars
else if ($_GET["action"] == "show")
	echo $cpt->show($_GET['code']);
// End of file x5captcha.php
