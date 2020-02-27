<!-- padrao do form é usar o _GET -->
<form method="get">
    <input type="text" name="nome">
    <input type="date" name="nascimento">
    <input type="submit" value="OK">
</form>
<?php
    foreach ($_GET as $key => $value) {
        echo "nome do campo: " . $key . '<br>';
        echo "valor do campo: ". $value;

        echo '<hr>';
    }
?>
