<?php 

$weekday = 'monday';

swithc($weekday){
	case'monday':
		echo "It's monday but i like Kenneth";
		break;
	case'Wedensday':
		echo "Just because it's Wedensday i still like Kenneth";
		break;
	case 'friday':
	case 'saturday':
	case 'sunday':
		echo "It is weekend";
		break;
	default:
		echo "Just another day";
}

 ?>