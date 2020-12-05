<html>
 <head>
  <title>PHP - 5 Words Only</title>
 </head>
 <body>
	<form method="submit" action="select_five_string.php">
  		<input type="text" name="string" placeholder="Type some string">
  		<br/>
  		<button type="submit" name="submit" value="submit">Separe 5 words</button>
	</form>


 <?php
 	echo "Example with the string 'The quick brown fox jumps over the lazy dog'<br/>";
	$string = 'The quick brown fox jumps over the lazy dog';
	echo implode(' ', array_slice(explode(' ', $string), 0, 5))."\n";

	echo "<br/><br/>";

	if (isset($_GET['submit'])){
		$userinput = $_GET['string'];
		echo implode(' ', array_slice(explode(' ', $userinput), 0, 5))."\n";
	}

 ?>

</body>
</html>