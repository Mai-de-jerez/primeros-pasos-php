<?php
// forma coñazo 

// $nombre = $_POST['nombre'];
// $apellidos = $_POST['apellidos'];
// $dni = $_POST['dni'];
// $email = $_POST['email'];
// $telefono = $_POST['telefono'];
// $fecha_nacimiento = $_POST['fecha_nacimiento'];
// $direccion = $_POST['direccion'];

// óptimo
foreach ($_POST as $key => $value) {
    if (empty($value)) {
        echo "<p>El campo '$key' está vacío.</p>";
    }
}

foreach ($_POST as $key => $value) {
    $$key = $value; // Esto crea variables dinámicas con los nombres de los campos del formulario
}

echo "<h1>Datos del alumno</h1>";
echo "<p>Nombre: {$_POST['nombre']}</p>";
echo "<p>Apellidos: {$_POST['apellidos']}</p>";
echo "<p>DNI: {$_POST['dni']}</p>";
echo "<p>Email: {$_POST['email']}</p>";
echo "<p>Teléfono: {$_POST['telefono']}</p>";
echo "<p>Fecha de nacimiento: {$_POST['fecha_nacimiento']}</p>";
echo "<p>Dirección: {$_POST['direccion']}</p>";


