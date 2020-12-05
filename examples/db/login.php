<?php 

function checkLogin($username,$password) {
    global $connection;
    $query = "SELECT * FROM usuarios where login='" . $username ."' and senha='" . $password ."'";
    echo $query;
    $results = pg_query($connection, $query);
    if(!$results) {
        die('A query falhou');
    }
    if(pg_num_rows($results) != 1) {
	    echo '<div class="p-3 mb-2 bg-danger text-white">Login incorreto</div>';
    } else {
        session_start();
        $_SESSION["nome"]=$username;
        header("Location: principal.php"); 
        exit;
    }
}

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
      <h3 class="text-center pt-5">Login</h3>
        <form action="login.php" method="post">
            <div class="form-group">
            <label for="username">Usuário</label>
            <input type="text" name="username" class="form-control">
            </div>
            
             <div class="form-group">
                <label for="password">Senha</label>
            <input type="password" name="password" class="form-control">
            </div>
            
            <input class="btn btn-primary" type="submit" name="submit" value="Entrar">
            <hr>
	    <a href="criar.php"> Criar login </a>
            <hr>

            <?php
                if(isset($_POST['submit'])) {
   
                    $username = $_POST['username'];
                    $password = $_POST['password'];
                       
                    $connection = pg_connect("host=localhost port=5432 dbname=db_sistema user=heitor password=heitor"); 

                    if($connection) {
                            checkLogin($username,$password); 
                        } else {                        
                            die("Conexão falhou");                     
                        }
                    }
            ?>
        </form>
    </div>

</div>
</body>
</html>
