<?php
    $con = new PDO("mysql:dbname=teste;host=localhost", "root", "root");

    if($con){
        echo "conectado ao banco de dados";
    }
    else{
        echo "falha na conexão";
    }

    $stmt = $con->prepare( "SELECT *FROM pessoa ORDER BY nome");

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo '<br>';
    foreach($res as $linha){
        foreach ($linha as $key => $value) {
            echo '<div>'.$key. ": ".$value.'</div>';
        }
        echo '<hr>';
    }




?>