<?php 

$weekday = 'monday';

swithc($weekday)
{
	case'monday':
		echo "I dont like mondays";
		break;
	case'Wedensday':
		echo "Ondagssegl";
		break;
	case 'friday':
	case 'saturday':
	case 'sunday':
		echo "It is weekend";
		break;
}

 ?>