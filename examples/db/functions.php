<?php
function createLogin($username,$password) {
    global $connection;
    $query = "INSERT INTO usuarios(login,senha) ";
    $query .= "VALUES ('$username','$password')";
    $results = pg_query($connection, $query);
    if(!$results) {
        die('A execução da query falhou');
    } else {
        echo '<div class="p-3 mb-2 bg-success text-white">Usuário criado com sucesso</div>';
        echo '<hr>';
        echo '<a href=login.php>Voltar para tela de Login</a>';
    }
}
function readLogin() {
    global $connection;
    $query = "SELECT * FROM usuarios";
    $result = pg_query($connection, $query);
    if(!$result) {
        die('A query falhou');
    }       
    echo '<div class="p-2 mb-2 bg-warning text-white">Lista de usuários</div>';
    while($row = pg_fetch_assoc($result)) {
        echo '<hr>';
        echo '<div class="p-3 mb-2 bg- text-white"> <b>Usuário:</b>'. $row["login"] . ' <b>Senha:</b>' . $row["senha"] .'</div>';
        echo '<form action="update.php" method="post"> <input type="hidden" name="user" value="'. $row["login"] .'"> <input class="btn btn-warning" type="submit" name="submit" value="Update"></form>';
        echo '<form action="delete.php" method="post"> <input type="hidden" name="user" value="'. $row["login"] .'"> <input class="btn btn-danger" type="submit" name="submit" value="Delete"></form>';
    }  
}

function updateLogin($username,$password) {
    global $connection;
    $query = "UPDATE usuarios SET senha='$password' ";
    $query .= "WHERE login='$username'";
    $results = pg_query($connection, $query);
    if(!$results) {
        die('A execução da query falhou');
    } else {
        echo '<div class="p-3 mb-2 bg-success text-white">Usuário '. $username .' foi atualizado com sucesso</div>';
        echo '<hr>';
        echo '<a href=principal.php>Voltar para tela principal</a>';
    }
}

function deleteLogin($username) {
    global $connection;
    $query = "DELETE FROM usuarios ";
    $query .= "WHERE login='$username'";
    $results = pg_query($connection, $query);
    if(!$results) {
        die('A execução da query falhou');
    } else {
        echo '<div class="p-3 mb-2 bg-success text-white">Usuário '. $username .' foi removido com sucesso</div>';
        echo '<hr>';
        echo '<a href=principal.php>Voltar para tela principal</a>';
    }
}



?>