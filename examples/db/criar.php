<?php 
require "functions.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">

    
    <div class="col-sm-6">
      <h3 class="text-center pt-5">Criar</h3>
        <form action="criar.php" method="post">
            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Criar">
            <hr>

            <?php
                if(isset($_POST['submit'])) {
   
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                       
                    $connection = pg_connect("host=localhost port=5432 dbname=db_sistema user=heitor password=heitor"); 

                    if($connection) {
                            createLogin($username,$password); 
                        } else {                        
                            die("Conexão com o banco de dados falhou!");                     
                        }
                    }
            ?>
        </form>
    </div>

</div>
</body>
</html>
