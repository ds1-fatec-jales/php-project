<!DOCTYPE html>
<header>
    <title>String 4</title>
</header>
<html>

<body>
    
    <form action="" method="POST">
        <div>
            <label for="letter"><b>Enter a letter</b></label>
            <input type="text" placeholder="enter a letter" name="letter" required>
            <br><br>
            <label for="position"><b>Enter a Position</b></label>
            <input type="number" placeholder="Enter a Position" min="0" name="position" required>
            <br><br>
            <button type="submit">Confirm</button>
        </div>
    </form>

    <?php

        $original_array = array(1, 2, 3, 4, 5);
        $insert_into_key_position =  (int)$_POST['position'];
        $item_to_insert = $_POST['letter'];

        $returned = array_splice($original_array, $insert_into_key_position -1 , 0, $item_to_insert);
        foreach($original_array as $valor){
        echo"$valor<br>";
        }

    ?>

</body>

</html>