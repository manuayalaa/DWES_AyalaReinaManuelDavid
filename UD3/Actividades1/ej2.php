<?php
/**
* @author Manuel David Ayala Reina
* @package dwes_php
* @subpackage dwes_unidad2
* @category Actividades evaluables.
* @version 1.0
*/
$dias = 31;
$mes = 2;
$anio = 2023;
switch ($mes){
    case 2:
        if ($anio % 4 == 0 and $anio % 100 != 0){
            $dias = 29;
        }
        if ($anio % 100 == 0 and $anio % 400 != 0){
            $dias = 28;
        }
        break;
    case 4:
    case 6:
    case 9:
    case 11:
        $dias = 30;
        break;
    


}
echo "El mes ".$mes." del año ".$anio." tiene ".$dias." dias.";



?>