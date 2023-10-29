<?php
/**
* @author Manuel David Ayala Reina
* @package dwes_php
* @subpackage dwes_unidad2
* @category Actividades evaluables.
* @version 1.0
*/
$dia = 28;
$mes = 9;
$anio = 2004;
$anioActual = date('Y');
$mesActual = date('m');
$diaActual = date('d');
$edad = 0;
$edad = $anioActual - $anio - 1;
if ($mes >= $mesActual && $dia >= $diaActual) {
    $edad++ ;
}
echo "<h1>".$edad."</h1>";
?>