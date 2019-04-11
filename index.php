<?php
session_start();

if (isset($_POST)) {
	var_dump($_POST);
	$randomNumber = (rand(1,6));
}


$randomNumber1 = $_SESSION["randomNumber1"];
$randomNumber2 = $_SESSION["randomNumber2"];
$randomNumber3 = $_SESSION["randomNumber3"];
$randomNumber4 = $_SESSION["randomNumber4"];


$differentRolls = implode('', $_POST);



switch ($differentRolls) {
	case 'roll1':
		$randomNumber1 = (rand(1,6));
		echo 'random number 1 generated';
		break;
	case 'roll2':
		$randomNumber2 = (rand(1,6));
		echo 'random number 2 generated';
		break;
	case 'roll3':
		$randomNumber3 = (rand(1,6));
		echo 'random number 3 generated';
		break;
	case 'roll4':
		$randomNumber4 = (rand(1,6));
		echo 'random number 4 generated';
		break;	
}

echo $randomNumber1;
echo $randomNumber2;
echo $randomNumber3;
echo $randomNumber4;

//if (in_array('resetResults', $_POST)) {




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








