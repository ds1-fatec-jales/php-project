<?php
//Create var date
$datetime1 = new DateTime('1981-11-03');
$datetime2 = new DateTime('2013-09-04');

// Returns the difference between two DateTime objects represented as a DateInterval.
$interval = $datetime1->diff($datetime2);
// Show the intervals
echo $interval->format('%y years, %m months, %d days');
