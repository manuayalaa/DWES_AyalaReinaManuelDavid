<?php

/**
 * @author Manuel David Ayala Reina
 * @package dwes_php
 * @subpackage dwes_unidad3
 * @category porfolio
 * @version 1.0
 */
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 1</title>
</head>

<body>
    <?php
    $arrays = [
        'mesesDelAnio' => [
            'Enero', 'Febrero', 'Marzo', 'Abril',
            'Mayo', 'Junio', 'Julio', 'Agosto',
            'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
        ],
        'tableroBarcos' => [
            ['O', 'O', 'O', 'X', 'X'],
            ['O', 'O', 'O', 'O', 'O'],
            ['X', 'X', 'O', 'O', 'O'],
            ['O', 'O', 'O', 'O', 'X'],
            ['O', 'O', 'X', 'O', 'O']
        ],
        'notasDWES' => [
            'Juan' => 9,
            'María' => 8,
            'Pedro' => 7,
            'Luisa' => 6,
        ],
        'verbosIrregularesIngles' => [
            'be' => ['am', 'are', 'is', 'are', 'are', 'am'],
            'have' => ['have', 'have', 'has', 'have', 'have', 'have'],
        ],
        'informacionContinente' => [
            'Asia' => [
                'paises' => ['China', 'India', 'Japón', 'Corea del Sur'],
                'capitales' => ['Pekín', 'Nueva Delhi', 'Tokio', 'Seúl'],
                'bandera' => 'bandera-de-asia.png'
            ],
            'Europa' => [
                'paises' => ['España', 'Francia', 'Alemania', 'Italia'],
                'capitales' => ['Madrid', 'París', 'Berlín', 'Roma'],
                'bandera' => 'bandera-de-europa.png'
            ],
        ],
];
    ?>

    <h1><?php echo $notasDWES['Juan']; ?></h1>
</body>

</html>