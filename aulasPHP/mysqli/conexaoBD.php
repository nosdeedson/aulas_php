<?php
    $con = new mysqli('localhost', 'root', 'root', 'teste');

    if($con->connect_error){
        echo "falha na conexão ". $con->connect_error;
    }
    else{
        echo "conectado ao banco ";
    }
    //$stmt = $con->prepare(" INSERT INTO pessoa (nome, sobrenome) values(?, ?)");

    //$stmt->bind_param("ss", $nome, $sobrenome);
    $nome = 'maria';
    $sobrenome = 'souza';

    $stmt = $con->prepare(" UPDATE pessoa SET nome = ? where id= 3");
    $stmt->bind_param("s", $nome);
    if($stmt->execute()){
        echo 'dados alterados';
    }
 
?>