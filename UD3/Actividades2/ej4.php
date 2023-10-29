<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla colores</title>
  <style>
    table{
      border-color:chartreuse;
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
  
  $letras = ["A","B","C","D","E","F"];
  echo '<table border="1">';
  for ($fila = 1; $fila <= 9; $fila++) {
    echo "<tr>";
    $color = $fila."0000";
    for ($columna = 0; $columna <= 5; $columna++) {
        $variante=$letras[$columna].$color;
        echo "<td style=\"background-color: #$variante;\">#$variante</td>";

    }
    echo "</tr>";
  }
  echo "</table>";
  ?>
</body>

</html>