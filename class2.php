<?php 
	$datetime1 = new DateTime('1981-11-03');
	$datetime2 = new DateTime('2013-09-04');
	$interval = $datetime1->diff($datetime2);

	echo $interval->format('%y years, %m months, %d days');
 ?>