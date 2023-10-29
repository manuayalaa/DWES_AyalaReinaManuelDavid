<?php
$lsprocesaFormulario = false;
$datos = [];
$resultados = [];

function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $lsprocesaFormulario = true;
    $aInputs = [];

    for ($i = 1; $i <= 10; $i++) {
        $inputName = 'num' . $i;
        if (isset($_POST[$inputName])) {
            $aInputs[$i - 1] = test_input($_POST[$inputName]);
        } else {
            $aInputs[$i - 1] = '';
        }
    }

    for ($fila = 1; $fila <= 10; $fila++) {
        for ($columna = 1; $columna <= 10; $columna++) {
            $resultado = $fila * $columna;
            $inputName = 'num' . ($fila * 10 + $columna);

            if (isset($_POST[$inputName])) {
                $inputValue = test_input($_POST[$inputName]);
                $datos[$fila][$columna] = $inputValue;
                $resultados[$fila][$columna] = $resultado;
            }
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla multiplicación</title>
    <style>
        table {
            border-color: chartreuse;
        }

        table td {
            background-color: skyblue;
        }

        .verdadero {
            color: green;
        }

        .falso {
            color: red;
        }
    </style>
</head>

<body>
    <?php if ($lsprocesaFormulario) { ?>
        <h1>Resultado del formulario</h1>
        <form method="POST" action="">
            <table border="1">
                <?php
                for ($fila = 1; $fila <= 10; $fila++) {
                    echo "<tr>";
                    for ($columna = 1; $columna <= 10; $columna++) {
                        
                        if (isset($datos[$fila][$columna])) {
                            echo "<td>";
                            $inputValue = $datos[$fila][$columna];
                            $resultado = $resultados[$fila][$columna];
                            echo "$fila x $columna = $inputValue ";
                            if($inputValue == $resultado) {
                                echo "<span class='verdadero'>Verdadero</span>";
                            }else{ 
                                echo "<span class='falso'>Falso</span>";
                            }

                        }else{
                            echo "<td>";
                            echo "<span>".$fila*$columna."</span>";
                        }
                        echo "</td>";
                    }
                    echo "</tr>";
                }
                ?>
            </table>
        </form>
    <?php } else { ?>
        <?php
        $valoresAleatorios = [];
        while (count($valoresAleatorios) < 10) {
            $numeroAleatorio1 = rand(1, 10); // Genera un número aleatorio
            $numeroAleatorio2 = rand(1, 10); // Genera un número aleatorio

            // Verifica si el número aleatorio ya está en el array
            if (!in_array([$numeroAleatorio1, $numeroAleatorio2], $valoresAleatorios)) {
                $valoresAleatorios[] = [$numeroAleatorio1, $numeroAleatorio2]; // Agrega el número al array si no está repetido
            }
        }
        echo "<form method='post' action=''>";
        echo '<table border="1">';
        for ($fila = 1; $fila <= 10; $fila++) {
            echo "<tr>";
            $numInput = $valoresAleatorios[$fila - 1];
            for ($columna = 1; $columna <= 10; $columna++) {
                $coord = [$fila, $columna];
                echo "<td>";
                if (!in_array($coord, $valoresAleatorios)) {
                    echo $fila * $columna;
                } else {
                    echo "<input type='number' name='num" . ($fila * 10 + $columna) . "' >";
                }
                echo "</td>";
            }
            echo "</tr>";
        }
        echo "</table>";
        echo '<input type="submit" name="enviar" value="Enviar">';
        echo "</form>";
        ?>
    <?php } ?>

    <br/><br/><br/><br/><a href="https://github.com/manuayalaa/DWES-CODE-RA3/tree/main/ud3/formularios/pruebaFormularioMultiplicacion">Enlace Github</a>
</body>

</html>
