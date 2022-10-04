<?php
    $pNumero = (float)$_GET['txtPnumero'];
    $posterior = $pNumero + 1;
    $antecessor = $pNumero - 1;

    echo "O antecessor do número digitado é igual a  ", + $antecessor, "<br> E seu antecessor é ", +$posterior;


?>
