<!DOCTYPE html>
<html>
<head>
	<title>Palindrome Checker</title>
</head>
<body>
	<h2>Palindrome Checker</h2>
	<form method='post'>
		<input type="text" name="text"/>
		<input type="submit" value="Is a Palindrome?"/>
	</form>

	<?php
		if($_POST)
		{
			$text = $_POST['text'];

			$text = str_replace(' ', '', $text);

			$revert = strrev($text);

			if($text == $revert)
				echo 'YES';
			else
				echo 'NO';
		}
	?>
</body>
</html>