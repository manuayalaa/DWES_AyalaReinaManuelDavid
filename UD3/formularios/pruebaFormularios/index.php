<?php
function test_input($data)
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);

    return $data;
}

$name = $email = $gender = $comment = $website = '';
$nameErr = $emailErr = $websiteErr = '';

$aGenero = ['Hombre', 'Mujer', 'Otro'];
$genderErr = '';
$aVehiculos = ['Bike', 'Car', 'Patinete'];
$aVehiculosSeleccionados = [];

$aOpciones = [
    ['valor' => 1, 'literal' => 'Opcion 1'],
    ['valor' => 2, 'literal' => 'Opcion 2'],
    ['valor' => 3, 'literal' => 'Opcion 3'],
    ['valor' => 4, 'literal' => 'Opcion 4'],
];
$opcionSeleccionada = 1;

$cars = ['Renault', 'Mercedes', 'Citroen', 'Volvo', 'Seat'];
$carSeleccionado = [];

$lsprocesaFormulario = FALSE;
$lerror = FALSE;

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    $lsprocesaFormulario = TRUE;

    // Validación del nombre
    if (empty($_POST['name'])) {
        $nameErr = 'El nombre es obligatorio';
        $lerror = TRUE;
    } else {
        $name = test_input($_POST['name']);
    }

    if (empty($_POST['email'])) {
        $emailErr = 'Email is required';
        $lerror = TRUE;
    } else {
        $email = test_input($_POST['email']);
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = 'Formato de email incorrecto';
            $lerror = TRUE;
        }
    }

    $comment = test_input($_POST['comment']);

    if (empty($_POST['gender'])) {
        $genderErr = 'El género es obligatorio';
        $lerror = TRUE;
    } else {
        $gender = test_input($_POST['gender']);
    }

    if (empty($_POST['website'])) {
        $websiteErr = 'La URL es obligatoria';
        $lerror = TRUE;
    } else {
        $website = test_input($_POST['website']);
    }

    if ($lerror) {
        $lsprocesaFormulario = FALSE;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba formulario</title>
    <style>
        .error {
            color: red;
        }
    </style>
</head>

<body>

    <?php if ($lsprocesaFormulario) {  ?>
        <h1>Resultado del formulario</h1>
        <!-- Muestra los resultados del formulario después de enviarlo -->
        Nombre: <?php echo $name; ?><br />
        Email: <?php echo $email; ?><br />
        Género: <?php echo $gender; ?><br />
        Comentario: <?php echo $comment; ?><br />
        URL: <?php echo $website; ?><br />
        <!-- Puedes mostrar más resultados aquí según sea necesario -->
    <?php } else { ?>
        <h1>Prueba formulario</h1>
        <form method="POST" action="">
            <!-- Agrega aquí tus campos de entrada y etiquetas -->
            Nombre:
            <input type="text" name="name" id="name" value="<?php echo $name ?>">
            <span class='error'><?php echo '*' . $nameErr; ?></span><br /><br />
            Email:
            <input type="text" name="email" id="email" value="<?php echo $email ?>">
            <span class='error'><?php echo '*' . $emailErr; ?></span><br /><br />
            URL:
            <input type="text" name="website" id="website" value="<?php echo $website ?>"><br />
            Comentario:<br>
            <textarea name="comment" id="comment" cols="30" rows="10"><?php echo $comment ?></textarea><br /><br />

            Género:<br />
            <?php foreach ($aGenero as $valorGen) { ?>
                <label>
                    <input type="radio" id="gender" name="gender" value="<?php echo $valorGen; ?>" <?php if ($gender === $valorGen) echo 'checked'; ?>>
                    <?php echo $valorGen; ?>
                </label>
                <br />
            <?php } ?>

            Transporte:<br />
            <?php foreach ($aVehiculos as $valorVeh) { ?>
                <label>
                    <input type="checkbox" id="vehiculo" name="vehiculo[]" value="<?php echo $valorVeh; ?>" <?php if (in_array($valorVeh, $aVehiculosSeleccionados)) echo 'checked'; ?>>
                    <?php echo $valorVeh; ?>
                </label>
                <br />
            <?php } ?><br />

            Opciones:
            <select name="opciones[]" id="opciones">
                <?php foreach ($aOpciones as $opcion) { ?>
                    <option value="<?php echo $opcion['valor']; ?>" <?php if ($opcionSeleccionada == $opcion['valor']) echo 'selected'; ?>><?php echo $opcion['literal']; ?></option>
                <?php } ?>
            </select><br />

            Vehículos:
            <select name="cars[]" id="cars" multiple>
                <?php foreach ($cars as $valorCar) { ?>
                    <option value="<?php echo $valorCar; ?>" <?php if (in_array($valorCar, $carSeleccionado)) echo 'selected'; ?>><?php echo $valorCar; ?></option>
                <?php } ?>
            </select><br /><br />

            <input type="submit" name="enviar" value="Enviar">
        </form>
    <?php } ?>
</body>

</html>