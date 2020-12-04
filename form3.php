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
  <form method="POST">
    <p>Full name: <input type="text" id="name" name="name" /></p>
    <p> <button>Submit</button></p>
  </form>
  <?php 
  if($_POST){
  $name = $_POST["name"];
  //Get the position of last space
  $last_space_position = strrpos($name, ' ');
  //Remove from the position
  $text_without_last_word = substr($name, 0, $last_space_position);
  echo "Name without last word: " . $text_without_last_word;
}
  ?>
</body>

</html>