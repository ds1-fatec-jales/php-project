<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title> remove characters </title>
</head>

<body>

<form action="form2.php" method="post">
    
    <input type="text" name="string" placeholder="Enter a text here">
    <input type="submit" name="submit">

</form>
</body>


<?php

    if(isset($_POST['submit'])) {
        
        $string = $_POST['string'];
        $newstring = preg_replace("/[^A-Za-z0-9 ]/", '', $string);

        echo 'Text: '.$string.'<br/>';
        echo 'formatted text: '.$newstring;
    }
?>

</html>