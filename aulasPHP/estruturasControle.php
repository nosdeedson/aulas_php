<?php
    echo "<div>estruturas de repeticção</div>";

    $diaSemana = date("w");

    echo $diaSemana;

    echo '<br>';

    echo '<select>';

    for ( $i = date("Y"); $i >= date("Y")-100; $i--){
        echo '<option value:". '. $i.'.">'.$i.'<option/>';
    }

    echo '</select>';

?>