<DOCTYPE html>
<!-- The second file get_city.php will contain PHP code to process the user's response. 
(In this case, something very simple.) After the user clicks the submit button,
 echo back Your favorite city is $city., where $city is the input from the form.-->
<title>Favorite City - Response</title>

<center>
<h1>Favorite City</h1>
<?php

$city = $_POST['city'];
// return your string
echo "<h2>Your favorite city is <font color=#ffd166>$city.</font></h2>";
?>
</center>
<style>
/* simple css */
input{
    border-radius:10px; background: lightblue;}

    h1{color: #ffd166; }

    body{background-color: GRAY;}
</style>
</body>
</html>