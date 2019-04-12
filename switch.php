<?php


switch ($randomNumber) {
	case '1':
		$blueDot1 = $yellowDot;
		$blueDot2 = $yellowDot;
		$blueDot3 = $yellowDot;
		$blueDot4 = $yellowDot;
		$blueDot6 = $yellowDot;
		$blueDot7 = $yellowDot;
		$blueDot8 = $yellowDot;
		$blueDot9 = $yellowDot;
		
		break;

	case '2':
		$blueDot2 = $yellowDot;
		$blueDot3 = $yellowDot;
		$blueDot4 = $yellowDot;
		$blueDot5 = $yellowDot;
		$blueDot6 = $yellowDot;
		$blueDot7 = $yellowDot;
		$blueDot8 = $yellowDot;
		
		break;

	case '3':
		$blueDot2 = $yellowDot;
		$blueDot3 = $yellowDot;
		$blueDot4 = $yellowDot;
		$blueDot6 = $yellowDot;
		$blueDot7 = $yellowDot;
		$blueDot8 = $yellowDot;
		
		break;

	case '4':
		$blueDot2 = $yellowDot;
		$blueDot4 = $yellowDot;
		$blueDot5 = $yellowDot;
		$blueDot6 = $yellowDot;		
		$blueDot8 = $yellowDot;
				
		break;

	case '5':		
		$blueDot2 = $yellowDot;		
		$blueDot4 = $yellowDot;		
		$blueDot6 = $yellowDot;		
		$blueDot8 = $yellowDot;
		
		break;

	case '6':		
		$blueDot2 = $yellowDot;		
		$blueDot5 = $yellowDot;		
		$blueDot8 = $yellowDot;
			
		break;
}


$_SESSION["randomNumber"] = $randomNumber;




?>