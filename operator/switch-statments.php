<?php
$k = "monday"; // suppose this is comes dynamically change 

switch ($k) {
 case 'sunday':
 	echo "day is sunday it's holiday";
 	break;
 	case 'monday':
 	echo "day is monday it's working day";
 	break;
 	case 'tuesday':
 	echo "day is post lunch";
 	break;
 	default:
 	echo "other days selected";
}
?>
// switch statements is similar to the multiple if condition but there is difference is if condition is check all the condition but can not in switch.