<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabla multiplicación</title>
  <style>
    table{
      border-color:chartreuse;
    }
    table td {
      background-color: skyblue;
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
  echo '<table border="1">';
  for ($fila = 1; $fila <= 10; $fila++) {
    echo "<tr>";
    for ($columna = 1; $columna <= 10; $columna++) {
      echo "<td>" . $fila * $columna . "</td>";
    };
    echo "</tr>";
  };
  echo "</table>";
  ?>
</body>

</html>