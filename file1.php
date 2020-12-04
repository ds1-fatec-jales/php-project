<!DOCTYPE html>
<html>
<head>
	<title>File 1</title>
</head>
<body>
	<form method='post'>
		<label>Name:</label>
		<input type="text" name="name"/>
		<label>Age:</label>
		<input type="text" name="age"/>
		<label>Address:</label>
		<input type="text" name="address"/>

		<input type="submit" name="submit" value="Create file"/>
	</form>

	<?php
		if(isset($_POST['submit']))
		{
			$information = "Name: ".$_POST['name']."\nAge: ".$_POST['age']."\nAddress: ".$_POST['address'];

			$file = fopen('information.txt', 'w');

			fwrite($file, $information);
		}
	?>
</body>
</html>