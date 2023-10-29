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
    $alumnos = [
        [
            'nombre' => 'Manuel',
            'apellidos' => 'Ayala Reina',
            'foto' => 'Fotos/cr7.jpg',
        ],
        [
            'nombre' => 'Juan',
            'apellidos' => 'Pérez',
            'foto' => 'Fotos/messi.jpg',
        ],
        [
            'nombre' => 'Pepe',
            'apellidos' => 'Fernandez',
            'foto' => 'Fotos/hamster.jpg',
        ],
        [
            'nombre' => 'Adrián',
            'apellidos' => 'Fernandez',
            'foto' => 'Fotos/grancapitan.jpg',
        ],
    ];

    $numAlumno = rand(0, count($alumnos)-1);
    echo '<h1>' . $alumnos[$numAlumno]['nombre'].' '.$alumnos[$numAlumno]['apellidos']; '</h1> ';
    echo '<br/><img src="'.$alumnos[$numAlumno]['foto'].'">';
    ?>

</body>

</html>