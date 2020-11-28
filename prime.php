<html>
 <head>
  <title>PHP - Prime Numbers</title>
 </head>
 <body>
<form method="submit" action="prime.php">
  <input type="text" name="num1" placeholder="Maximum prime number">
  <br/>
  <button type="submit" name="submit" value="submit">Calculate</button>
 </form>

<?php

if (isset($_GET['submit'])){

    $userinput = $_GET['num1'];
    for($i = 1; $i <= $userinput; $i++)
    {

        $div = 0;
         
        for($j = $i; $j >= 1; $j--)
        {
            if (($i % $j) == 0) {
                $div++;
            }
        }
         
        if ($div == 2)
        {
            echo $i . ', ';
        }
    }
}