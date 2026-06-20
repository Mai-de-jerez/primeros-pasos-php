<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="estilos/estilos.css">
</head>
<body>
    <header>
        <!-- Con require podemos incluir un archivo dentro de otro y detener la ejecución si no se encuentra -->
        <?php require 'includes/header.php'; ?>
    </header> 
    <main>
        <section>
            <article>
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

                    echo "<h1>Datos del alumno</h1>";
                    echo "<p>Nombre: {$_POST['nombre']}</p>";
                    echo "<p>Apellidos: {$_POST['apellidos']}</p>";
                    echo "<p>DNI: {$_POST['dni']}</p>";
                    echo "<p>Email: {$_POST['email']}</p>";
                    echo "<p>Teléfono: {$_POST['telefono']}</p>";
                    echo "<p>Fecha de nacimiento: {$_POST['fecha_nacimiento']}</p>";
                    echo "<p>Dirección: {$_POST['direccion']}</p>";

                    // con $$ podemos crear variables dinámicas con los nombres de los campos del formulario, 
                    // pero hay que tener cuidado con esto porque puede ser un riesgo de seguridad si no se valida correctamente la entrada del usuario
                    foreach ($_POST as $key => $value) {
                        $$key = $value; 
                    }

                    // y entonces ya podemos usar las variables directamente
                    echo "<h1>Otra forma de mostrar los datos</h1>";
                    echo "<table>";
                    echo "<tr><th>Campo</th><th>Valor</th></tr>";
                    echo "<tr><td>Nombre</td><td>$nombre</td></tr>";
                    echo "<tr><td>Apellidos</td><td>$apellidos</td></tr>";
                    echo "<tr><td>DNI</td><td>$dni</td></tr>";
                    echo "<tr><td>Email</td><td>$email</td></tr>";
                    echo "<tr><td>Teléfono</td><td>$telefono</td></tr>";
                    echo "<tr><td>Fecha de nacimiento</td><td>$fecha_nacimiento</td></tr>";
                    echo "<tr><td>Dirección</td><td>$direccion</td></tr>";
                    echo "</table>";
                ?>
            </article>
        </section>
    </main>
    <footer>
        <!-- Con require porque el footer es esencial y no queremos que se ejecute el resto del código si no se encuentra -->
        <?php require 'includes/footer.php'; ?>
    </footer>
</body>
</html>
