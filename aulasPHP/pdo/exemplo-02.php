<?php
$con = new PDO("mysql:dbname=teste;host=localhost", "root", "root");

if ($con) {
    echo "conectado ao banco de dados";
} else {
    echo "falha na conexão";
}

//$stmt = $con->prepare( "INSERT INTO pessoa (nome, sobrenome) values(:NOME, :SOBRENOME)" );
//$stmt = $con->prepare( "UPDATE pessoa SET nome= :nome ,sobrenome= :sobrenome WHERE id= :id");
$stmt = $con->prepare( "DELETE FROM pessoa WHERE id= :id");
$nome = 'glauciane';
$sobrenome = 'silva';
$id = 8;

//$stmt->bindParam(":nome", $nome);
//$stmt->bindParam(":sobrenome", $sobrenome);
$stmt->bindParam(":id", $id);
echo '<br>';
$teste = $stmt->execute();

if( $stmt->execute()== 1){
    echo "deletado";
}
else{
    echo 'nao inserido';
}

?>