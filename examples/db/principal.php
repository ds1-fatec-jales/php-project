<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Principal</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
</head>
<body>
<div class="container">    
    <div class="col-sm-6">               

            <?php                
                session_start();
                echo '<div class="p-3 mb-2 bg-success text-white">Olá, ' . $_SESSION["nome"] . '</div>'

            ?>
	 <hr>

	 <form action="principal.php" method="post">
		 <input class="btn btn-danger" type="submit" name="submit" value="Sair">
         </form>
	 
            <?php
                if(isset($_POST['submit'])) {
                    session_destroy();
                    header("Location: login.php");
                }
            ?>

        </form>
    </div>

</div>
</body>
</html>
