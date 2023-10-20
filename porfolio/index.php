<?php
/**
 * @package dwes_php
 * @subpackage dwes_unidad3
 * @category porfolio
 * @version 1.0
 */

// Cargamos el fichero de configuración.
include 'config/config.php';

$nombre = $datos['nombre'];
$apellidos = $datos['apellidos'];
$fotoPersonal = $datos['foto'];
$resumen = $datos['resumen'];
$catprofesional = $datos['catprofesional'];
$email = $datos['email'];
$telefono = $datos['telefono'];
$twitter = $datos['redessociales']['twitter'];
$linkedin = $datos['redessociales']['linkedin'];

$proyectos = $datos['proyectos'];
$habilidades = $datos['habilidades'];

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Mi Portfolio</title>
</head>
<body>
    <header>
        <h1><?php echo $nombre . ' ' . $apellidos; ?></h1>
        <p>Email: <?php echo $email; ?></p>
        <p>Teléfono: <?php echo $telefono; ?></p> 
        <p>Categoría Profesional: <?php echo $catprofesional; ?></p> 
        <img src="<?php echo $fotoPersonal; ?>" alt="Tu Foto Personal">
    </header>

    <section class="resumen">
        <h2>Resumen</h2>
        <p><?php echo $resumen; ?></p>
    </section>

    <section class="proyectos">
        <h2>Proyectos</h2>
        <ul>
            <?php foreach ($proyectos as $nombreProyecto => $datosProyecto) { ?>
                <li><?php echo $nombreProyecto; ?></li>
                <ul>
                    <li>Descripción: <?php echo $datosProyecto['descripcion']; ?></li>
                    <li>Logo: <?php echo $datosProyecto['logo']; ?></li>
                    <li>Tecnologías: <?php echo $datosProyecto['tecnologias']; ?></li>
                </ul>
            <?php } ?>
        </ul>
    </section>

    <section class="habilidades">
        <h2>Habilidades</h2>
        <ul>
        <?php foreach ($habilidades as $habilidad) { ?>
                <li>· <?php echo $habilidad; ?></li>
            <?php } ?>
        </ul>
    </section>

    <section class="enlaces">
        <h2>Enlaces</h2>
        <ul>
            <li><a href="<?php echo $twitter; ?>">LinkedIn</a></li>
            <li><a href="<?php echo $linkedin; ?>">Twitter</a></li>
        </ul>
    </section>
    <footer>
        <p>Derechos de autor © 2023 <?php echo $nombre . ' ' . $apellidos; ?></p>
    </footer>
</body>
</html>
