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
        <?php
        // Con $_GET podemos obtener el valor de un parámetro que se pasa por la URL
        $pagina = $_GET['pagina'] ?? 'inicio';
        // Con ?? podemos asignar un valor por defecto a una variable si no se encuentra el parámetro en la URL
        
        // Con if y else podemos ejecutar un bloque de código u otro dependiendo de una condición
        if ($pagina === 'inicio'): ?>
            <h1>Aprendiendo PHP</h1>
            <section>
                <article>
                   <ul>
                    <li><a href="?pagina=01-tipos-de-datos">1. Tipos de datos</a></li>
                    <li><a href="?pagina=02-comentarios">2. Comentarios</a></li>
                    <li><a href="?pagina=03-imprimir-variables">3. Variables</a></li>
                    <li><a href="?pagina=04-condicionales">4. Condicionales</a></li>
                    <li><a href="?pagina=05-bucle-for">5. Bucles</a></li>
                </ul>  
                </article>                                   
            </section>
        <?php else: 
            // Con include podemos incluir un archivo dentro de otro y continuar la ejecución si no se encuentra       
            include "paginas/$pagina.php";
        endif; // con endif cerramos el if y else
        ?>       
    </main>
    <footer>
        <!-- Con require porque el footer es esencial y no queremos que se ejecute el resto del código si no se encuentra -->
        <?php require 'includes/footer.php'; ?>
    </footer>
</body>
</html>


