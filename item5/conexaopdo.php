<?php



try {
    
    //$pathDB = "dblib:host=127.0.0.1;dbname=item5ufmt;charset=UTF-8";
    $pathDB = 'dblib:host=localhost;dbname=db_provaufmt;charset=UTF-8';
    $userName = 'root';
    $pwd = " ";
    //$conn = new PDO($pathDB,$user,$pwd);
    $conn = new PDO('dblib:host=127.0.0.1:8080;dbname=db_provaufmt;charset=UTF-8',$userName,$pwd);
    
    echo "Conectado !!";
    
    
} catch (Exception $e) {
    
    echo "Não Conseguimos conectar ao DB - erro:".$e->getMessage();
    
}
