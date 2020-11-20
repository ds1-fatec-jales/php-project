<?php

$time = '082307';

//Make chunks of $time (chunk with size 2 characters)
$timeSplit = str_split($time, 2);

//Combine the chunks separated with : to seem a time string
$timeSplit = implode(':', $timeSplit);

echo $timeSplit;
