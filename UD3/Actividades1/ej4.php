<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        $hora = date('H');
        switch ($hora){
            case 1:
                $colorfondo = "#FF0000";
                break;
            case 2:
                $colorfondo = "#00FF00";
                break;
            case 3:
                $colorfondo = "0000FF";
                break;
            case 4:
                $colorfondo = "FFFF00";
                break;
            case 5:
                $colorfondo = "#FF00FF";
                break;
            case 6:
                $colorfondo = "#00FFFF";
                break;
            case 7:
                $colorfondo = "#800000";
                break;
            case 8:
                $colorfondo = "#008000";
                break;
            case 9:
                $colorfondo = "#000080";
                break;
            case 10:
                $colorfondo = "#FFA500";
                break;
            case 11:
                $colorfondo = "#A0522D";
                break;
            case 12:
                $colorfondo = "#800080";
                break;
            case 13:
                $colorfondo = "#808000";
                break;
            case 14:
                $colorfondo = "#008080";
                break;
            case 15:
                $colorfondo = "#C0C0C0";
                break;
            case 16:
                $colorfondo = "#808080";
                break;
            case 17:
                $colorfondo = "#FFD700";
                break;
            case 18:
                $colorfondo = "#FFFFE0";
                break;
            case 19:
                $colorfondo = "#F0E68C";
                break;
            case 20:
                $colorfondo = "#98FB98";
                break;
            case 21:
                $colorfondo = "#ADD8E6";
                break;
            case 22:
                $colorfondo = "#D3D3D3";
                break;
            case 23:
                $colorfondo = "#FA8072";
                break;
            case 24:
                $colorfondo = "#2E8B57";
                break;
        }


    ?>
    <style>
        body {
            background-color: <?php echo $colorfondo; ?>;
        }
    </style>
</head>

<body>
    <?php
    /**
     * @author Manuel David Ayala Reina
     * @package dwes_php
     * @subpackage dwes_unidad3
     * @category Actividades evaluables.
     * @version 1.0
     */
    $dia = 19;
    $mes = 10;
    $estacion = "";

    switch ($mes) {
        case 1:
            $estacion = "Invierno";
            break;
        case 2:
            $estacion = "Invierno";
            break;
        case 3:
            $estacion = "Invierno";
            if ($dia >= 20) {
                $estacion = "Primavera";
            }
            break;
        case 4:
            $estacion = "Primavera";
            break;
        case 5:
            $estacion = "Primavera";
            break;
        case 6:
            $estacion = "Primavera";
            if ($dia >= 21) {
                $estacion = "Verano";
            }
            break;
        case 7:
            $estacion = "Verano";
            break;
        case 8:
            $estacion = "Verano";
            break;
        case 9:
            $estacion = "Verano";
            if ($dia >= 23) {
                $estacion = "Otoño";
            }
            break;
        case 10:
            $estacion = "Otoño";

        case 11:
            $estacion = "Otoño";

        case 12:
            $estacion = "Otoño";
            if ($dia >= 21) {
                $estacion = "Invierno";
            }
            break;
    }

    echo '<h1>'.$estacion.'</h1>';
    switch ($estacion) {
        case "Primavera":
            echo "</br><img src='Fotos/Primavera.jpg' alt='Foto primavera' >";
            break;
        case "Verano":
            echo "</br><img src='Fotos/Verano.jpg' alt='Foto verano'>";
            break;
        case "Otoño":
            echo "</br><img src='Fotos/Otoño.jpg' alt='Foto otoño'>";
            break;
        case "Invierno":
            echo "</br><img src='Fotos/Invierno.jpg' alt='Foto invierno'>";
            break;
    }

    ?>
</body>

</html>