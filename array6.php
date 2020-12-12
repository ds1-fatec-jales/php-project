<?php
    $file = $_POST['file_name'];
    $ext = explode(".", $file); //separa a string em duas partes, antes e depois do "." criando um array com as strings
    $extension_allowed = array('php', 'txt', 'html', 'pdf', 'js');
   
    
   if($ext[0] == "") {
        echo "Invalid file's name"; //verifica se o arquivo possui nome
    } 
    else if($ext[1] == ""){
        echo "Invalid extension's file"; //verifica se o arquivo possui uma extensão
    }
    else if(!in_array($ext[1], $extension_allowed)){ //verifica se a extensão está no array
        echo "Not allowed extension";
    }
    else{
        echo "File " . $ext[1]; //imprima a extensão que esteja no array
    }
   
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array 6</title>
</head>
<body>
    <form action="array6.php" method="POST">
        <input type="text" name="file_name">
        <input type="submit" name="submit">
    </form>
</body>
</html>