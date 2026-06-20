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
        <section class="contenedor-registro">
            <article>
            <h1>Regístrate en nuestra web</h1>
           
            <form action="procesar_alumno.php" method="post" class="form-registro">
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" id="nombre" name="nombre" required>
                </div>
                <div class="form-group">
                    <label for="apellidos">Apellidos:</label>
                    <input type="text" id="apellidos" name="apellidos" required>
                </div>
                <div class="form-group">
                    <label for="dni">DNI:</label>
                    <input type="text" id="dni" name="dni">
                </div>
                <div class="form-group">
                    <label for="fecha_nacimiento">Fecha de nacimiento:</label>
                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento">
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email">
                </div>
                <div class="form-group">
                    <label for="telefono">Teléfono:</label>
                    <input type="text" id="telefono" name="telefono">
                </div>
                <div class="form-group">
                    <label for="direccion">Dirección:</label>
                    <input type="text" id="direccion" name="direccion">
                </div>
                <div class="form-group">
                    <input type="submit" value="Dar de alta" class="btn-enviar">
                </div>
                </form>
            </article>          
        </section>             
    </main>
    <footer>
        <!-- Con require porque el footer es esencial y no queremos que se ejecute el resto del código si no se encuentra -->
        <?php require 'includes/footer.php'; ?>
    </footer>
</body>
</html>


