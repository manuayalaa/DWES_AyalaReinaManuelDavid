<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calendario Mensual</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            border: 1px solid #000;
            text-align: center;
            padding: 5px;
        }

        th {
            background-color: #f0f0f0;
        }

        .hoy {
            background-color: #00FF00;
            /* Día actual en verde */
        }
    </style>
</head>

<body>
    <?php
    // Obtener el mes y el año actual
    $mesActual = date('n'); // n representa el número del mes (1-12)
    $anoActual = date('Y'); // Y representa el año en formato de 4 dígitos
    $diaActual = date('d');
    // Días de la semana
    $diasSemana = ['L', 'M', 'X', 'J', 'V', 'S', 'D'];

    // Nombres de los meses
    $nombreMeses = [
        'Enero', 'Febrero', 'Marzo', 'Abril',
        'Mayo', 'Junio', 'Julio', 'Agosto',
        'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'
    ];

    // Obtener el número de días en el mes actual
    $numDiasMes = date('t', strtotime("$anoActual-$mesActual-$diaActual"));

    // Obtener el día de la semana del primer día del mes
    $primerDiaSemana = date('N', strtotime("$anoActual-$mesActual-$diaActual"));

    // Crear una tabla para el calendario
    echo "<h2>{$nombreMeses[$mesActual - 1]} $anoActual</h2>";
    echo '<table border="1">';
    echo '<tr>';
    foreach ($diasSemana as $dia) {
        echo "<th>$dia</th>";
    }
    echo '</tr>';

    echo '<tr>';
    $contadorDia = 1;

    // Rellenar los días en blanco antes del primer día del mes
    for ($i = 1; $i < $primerDiaSemana; $i++) {
        echo '<td></td>';
    }

    // Rellenar los días del mes
    while ($contadorDia <= $numDiasMes) {
        $claseDia = ($contadorDia == date('j')) ? 'class="hoy"' : ''; // Marcar el día actual en verde
        echo "<td $claseDia>$contadorDia</td>";

        if ($primerDiaSemana == 7) {
            echo '</tr><tr>';
            $primerDiaSemana = 0;
        }

        $contadorDia++;
        $primerDiaSemana++;
    }

    // Completar con celdas vacías los últimos días de la última semana
    while ($primerDiaSemana <= 7) {
        echo '<td></td>';
        $primerDiaSemana++;
    }

    echo '</tr>';
    echo '</table>';
    ?>
</body>

</html>