<?php
function CheckTime($value){



$time = explode(":", $value);
switch($time){
case (($time[0]>=5 && $time[0]<=10) && ($time[1]>=0 && $time[1]<=59)):
	echo 'Good morning!<br />';
	break;
case (($time[0]>=11 && $time[0]<=16) && ($time[1]>=0 && $time[1]<=59)):
	echo 'Good afternoon!';
	break;
case (($time[0]>=17 && $time[0]<=21) && ($time[1]>=0 && $time[1]<=59)):
	echo 'Good everning!<br />';
	break;
case (($time[0]>=1 && $time[0]<=4) && ($time[1]>=0 && $time[1]<=59)):
	echo 'Good Night!<br />';
	break;
}

	
	}

echo CheckTime("14:50");
?>
