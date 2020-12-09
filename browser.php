<?php
echo $_SERVER['HTTP_USER_AGENT'] . "<hr />\n";
$browser = get_browser();
foreach ($browser as $name => $value) {
    echo "<b>$name</b> $value <br />\n";
}
?>