<!DOCTYPE html>
<html lang="ptbr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Class 5</title>
  <style>
    * {
      font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background: #171727;
      color: white;
    }

    .container {
      width: 100%;
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .content {
      max-width: 400px;
      margin: 0 auto;
      text-align: center;
      padding: 2rem;
      border-radius: 1rem;
      box-shadow: 0 1px 16px rgba(0, 0, 0, 0.15);
      background: #202030;
    }

    p {
      margin: 2rem 0;
    }
  </style>
</head>

<body>
  <div class="container">
    <div class="content">
      <p>Write a PHP class in a script named class5.php that sorts an ordered integer array with the help of sort() function.</p>
      <?php

      // Sample array : array(11, -2, 4, 35, 0, 8, -9)
      // Output :
      // Array ( [0] => -9 [1] => -2 [2] => 0 [3] => 4 [4] => 8 [5] => 11 [6] => 35 )

      // Define the class Order
      class OrderedArray {
        // Class constructor created
        function __construct($array){
          $this->array = $array;
        } 

        // Print method to show if the array is working
        function print_array(){
          $string_array = implode(", ", $this->array);
          echo "<p>$string_array</p>";
        }

        // Sorting method that uses the $array attribute on this class
        function sort_array(){

          // the sort function returns true or false and changes the array value
          // the first parameter passed at the function is the array itself
          // the second one is optional, but can be used to modify the ordenation behaviour

          sort($this->array);
          foreach ($this->array as $index => $item) {
            echo "<li>[$index] = $item</li>";
          }
        }
      }

      // creating the array
      $array = array(11, -2, 4, 35, 0, 8, -9);

      // class instantiate
      $ordered_array = new OrderedArray($array);
      
      // printing the result from the sort method
      echo"<ul>".$ordered_array->sort_array()."</ul>";

      ?>
    </div>
  </div>
</body>

</html>