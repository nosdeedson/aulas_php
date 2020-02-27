<?php
$con = new PDO("mysql:dbname=teste;host=localhost", "root", "root");

if ($con) {
    echo "conectado ao banco de dados";
} else {
    echo "falha na conexão";
}

$con->beginTransaction();

$stmt = $con->prepare("DELETE FROM pessoa WHERE id= ?");
$id = 3;
$stmt->bindParam(1, $id);
$t = $stmt->execute();

$nome='andrea';
$sobrenome ='chaves';

$stmt = $con->prepare("INSERT INTO pessoa (nome, sobrenome) values(?,?)");
$stmt->bindParam(1, $nome);
$stmt->bindParam(2, $sobrenome);

$t2 = $stmt->execute();

if( $t == 1 && $t2 == 1){
    $con->commit();
    echo "<br>operação realizada com sucesso";
}
else{
    $con->rollBack();
    echo "<br>falha na operação";
}









?>