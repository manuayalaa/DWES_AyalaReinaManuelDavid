<?php
    $arrayPersonas = array();
    array_push($arrayPersonas, $_POST['nombre'],$_POST['apellidos']);
    echo $arrayPersonas[0];
    echo $arrayPersonas[1];

