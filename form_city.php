<DOCTYPE html>
<!-- Create two separate files. The first form_city.php will contain a form with one 
input field asking for the user's favorite city. Use the post method for the form. 
Although this file contains no PHP code, on my localhost,
 it needs the .php extension to successfully call the second file.-->
<title>Favorite City - Request</title>
<body>  
<!-- the "submit" will refer to name file in action(get_cty.php) -->
<center>
<h1>Favorite City</h1>
<form method="post" action="get_city.php">
<h2>Type here your favorite city: </h4>
<input type="text" name="city" />

<input type="submit" name="submit" value="Send" />

</form>
</center>
<style>
/* simple css */
input{
    border-radius:10px; background: lightblue;}

    h1{color: #ffd166; }

    body{background-color: GRAY;}
</style>
</body>