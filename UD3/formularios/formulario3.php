<?php
/**
 * @author Manuel David 
 * @version 1.0
 */
$info = array('nombre','apellidos')
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Fromulario 3</title>
</head>
<body>
    <form action="formulario3.php" method="post">
        <?php
        foreach ($info as $key => $value){
            echo '<input type="text" name="'.$value.'" placeholder="'.$value.'"/><br>';

        };
        ?>
    <button type="submit" name="enviar">Enviar</button>
    </form>
</body>
</html>