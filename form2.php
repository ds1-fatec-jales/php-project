<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title> remove characters </title>
</head>

<body>

<form action="form2.php" method="post">
    
    <input type="text" name="string">
    <input type="submit" name="submit">       
</body>
</form>


<?php

    if(isset($_POST['submit'])) {
        
        $string = $_POST['string'];
        $newstring = preg_replace("/[^A-Za-z0-9 ]/", '', $string);

        echo 'String: '.$string.'<br/>';
        echo 'New string: '.$newstring;
    }
?>