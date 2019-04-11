<?php
session_start();
//OK, a little explanation here. We create a yellow square with 9 blue dots. Depending on a random number 1-6 the nine blue dots will from 1-6 dots, and the unneded dots will turn yellow, so they will disappear in the yellow background.
//bluedotcreation.php: here we create the dots, and their coordinates, shape, and variables for their colour. By default they are blue, every dot has his individual variable for color.
//bluedots.php: the individaul variable are getting here the blue color.
//switch.php: turning the invidiual blue dots to yellow, when necesarry


if (isset($_POST)) {
	var_dump($_POST);
	$randomNumber = (rand(1,6));
}


$randomNumber1 = $_SESSION["randomNumber1"];
$randomNumber2 = $_SESSION["randomNumber2"];
$randomNumber3 = $_SESSION["randomNumber3"];
$randomNumber4 = $_SESSION["randomNumber4"];



$imageName = 0;

$differentRolls = implode('', $_POST);
switch ($differentRolls) {
	case 'roll1':
		$randomNumber1 = (rand(1,6));
		echo 'random number 1 generated';
		$randomNumber = $randomNumber1;
		$imageName = "image1.png";
		break;
	case 'roll2':
		$randomNumber2 = (rand(1,6));
		echo 'random number 2 generated';
		$randomNumber = $randomNumber2;
		$imageName = "image2.png";
		break;
	case 'roll3':
		$randomNumber3 = (rand(1,6));
		echo 'random number 3 generated';
		$randomNumber = $randomNumber3;
		$imageName = "image3.png";
		break;
	case 'roll4':
		$randomNumber4 = (rand(1,6));
		echo 'random number 4 generated';
		$randomNumber = $randomNumber4;
		$imageName = "image4.png";
		break;	
}

echo $randomNumber1;
echo $randomNumber2;
echo $randomNumber3;
echo $randomNumber4;



$imSquare =  imageCreate(210, 210) or die("Shit");//this is the whole image
$background_color = imagecolorallocate($imSquare, 255, 255, 0);
$blueDot = imagecolorallocate($imSquare, 10, 10, 255);//blue
$yellowDot = imagecolorallocate($imSquare, 255, 255, 0);//yellow

require 'bluedots.php';//this gives personalizes blue colours to each dot 1-9
require 'switch.php';//this decides what dot will 'disappear' depending on the generated random number
require 'bluedotcreation.php';//this creates the dots 1-9

imagepng($imSquare, $imageName);// $imageName is one of these: "image1.png" "image2.png" "image3.png" "image4.png"
imagedestroy($imSquare);//this will remove the unnecesary pictures from our system, after we don't need it.

require 'index.view.php';//obviously, this is our final view...

?>








