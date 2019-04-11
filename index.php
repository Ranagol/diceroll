<?php
if (isset($_POST)) {
	var_dump($_POST);
	$randomNumber = (rand(1,6));
}



$imSquare =  imageCreate(210, 210) or die("Shit");//this is the whole image
$background_color = imagecolorallocate($imSquare, 255, 255, 0);
$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
$yellowDot = imagecolorallocate($imSquare, 255, 255, 0);//yellow

require 'bluedots.php';//this gives personalizes blue colours to each dot 1-9
require 'switch.php';//this decides what dot will 'disappear' depending on the generated random number
require 'bluedotcreation.php';//this creates the dots 1-9


imagepng($imSquare,"image.png");
imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.



require 'index.view.php';
?>








