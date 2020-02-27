<?php
    $con = new mysqli('localhost', 'root', 'root', 'teste');

    if($con->connect_error){
        echo "falha na conexão ". $con->connect_error;
    }
    else{
        echo "conectado ao banco ";
    }
    echo "<br>";

    $res = $con->query("SELECT *FROM pessoa ORDER BY nome");
    $dados = array();
    while( $linha = $res->fetch_assoc()){
        array_push($dados, json_encode($linha));
      
    }

    foreach( $dados as $dado){
        $d = $dado;
        echo $d;
    }



 
?>