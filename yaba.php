<?php
$str1 = 'yabadabadoo';
$str2 = 'yaba';
//strpos returns the location of second string in the first string, if second string was in first string
//if not in, will return false
//in this case strpos($str1,$str2) will return 0, because the $str2 is in the begin of $str1
//and the php considers 0 equals to false
//so I put the "!==" to specify that the returned value needs to be different from the value and type of "false"
//and now it works
if (strpos($str1,$str2) !== false) {
    echo "\"" . $str1 . "\" contains \"" . $str2 . "\"";
} else {
    echo "\"" . $str1 . "\" does not contain \"" . $str2 . "\"";
}
?>