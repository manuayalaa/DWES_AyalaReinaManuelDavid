<?php
/**
* @author Manuel David Ayala Reina
* @package dwes_php
* @subpackage dwes_unidad3
* @category Actividades evaluables.
* @version 1.0
*/
$total = 0;
for ($numero = 1;$numero <= 6;$numero++) {
    if ($numero % 2 == 0){
        $total = $numero + $total;

    }
    
}
echo "Total: ".$total;
?>