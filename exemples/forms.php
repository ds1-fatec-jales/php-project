<?php
if (isset($_POST['submit'])) {

  $name = array("Heitor", "Gabriel", "Eleonaldo", "Gustavo");

  $username = $_POST['username'];
  $password = $_POST['password'];

  $minimun = 5;
  $maximun = 10;

  if (strlen($username) < $minimun) {
    echo "Username has to be longer than: " . $minimun;
  }
  if (strlen($username) > $maximun) {
    echo "Username cannot be longer than: " . $maximun;
  }
  if (!in_array($username, $name)) {
    echo "Sorry you are not allowed";
  } else {
    echo "Welcome " . $username;
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title> Login </title>
</head>

<body>

  <form action="form.php" method="post">

    <input type="text" name="username" placeholder="Enter Username">
    <input type="password" name="password" placeholder="Enter Password"><br>
    <input type="submit" name="submit">

  </form>