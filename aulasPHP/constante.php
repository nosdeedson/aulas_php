<?php
    define("SERVIDOR", "127.0.0.1");

    echo SERVIDOR;

    // array constante
// para acessar o BD ip, usuario, senha nesta ordem
    define("BANCO_DE_DADOS", [
        '127.0.0.',
        'root',
        'root'
    ]);

    echo '<br>';
    print_r(BANCO_DE_DADOS);
    echo '<br>';
    echo PHP_VERSION;
    
?>