<?php
require "functions.php";
               
if(isset($_POST['submit'])) {
    session_start();            
    $username = $_POST['user'];                             
    $connection = pg_connect("host=localhost port=5432 dbname=db_sistema user=heitor password=heitor"); 
                
    if($connection) {
        if ($_SESSION["nome"] == $username) {
            die("Não pode");
        }
        deleteLogin($username);                      
    } else {                                               
        die("Conexão com o banco de dados falhou!");                                    
    }                 
}
?>