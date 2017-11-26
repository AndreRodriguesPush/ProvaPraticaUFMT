<?php
try {
    
    $pathDB = "mysql:host=127.0.0.1;dbname=item5ufmt";
    $userName = 'root';
    $pwd = "";
    $conn = new PDO($pathDB,$userName,$pwd);   
    
} catch (PDOException $e) {
    
    echo "erro:".$e->getMessage()." Tente Novamente mais tarde !";
    
}
