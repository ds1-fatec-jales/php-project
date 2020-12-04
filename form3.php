<!-- Write a PHP script named form3.php with a HTML form that removes the last word from a string.
Sample string :
The quick brown fox
Expected Output :
The quick brown -->
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form 3</title>
</head>

<body>
  <form action="" method="post">
    <p>Full name: <input type="text" name="name" /></p>
    <p><input type="submit" /></p>
  </form>
  <?php
  echo "Input 1" . $_POST["name"];
  ?>
</body>

</html>