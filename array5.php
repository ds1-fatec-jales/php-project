<!--I have a property in PHP called: rsort -->
<!-- rsort example -->
<!-- $fruits = array("lemon", "orange", "banana", "apple");
// sort($fruits);
rsort($fruits);
foreach ($fruits as $key => $value) {
  echo "$key = $value\n";
} -->
<?php
$array = array('A', 'B', 'C', 'D', 'E');
sort($array); // Show array in ascending order
print_r($array);

echo '<br/>';

rsort($array); // show array in descending order
print_r($array);

echo '<br/>';

$array2 = array(1, 6, 5, 9, 8);
sort($array2); //Sort array first, then show ascending
print_r($array2);

echo '<br/>';

rsort($array2); // Show in descending
print_r($array2);
?>