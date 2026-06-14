<section>
    <article>
        <h2>Bucle FOR</h2>
        <pre>
    for (inicialización; condición; incremento) {
        // Código a ejecutar en cada iteración
    }
        </pre>           
        <p>Ejemplo: Declaramos el buscle for para imprimir los números del 1 al 10:</p>
        <pre>
    for ($i = 1; $i &lt;= 10; $i++) {
        echo $i . "&lt;br&gt;";
    }
        </pre>  
        <p>Estos valores corresponden a la salida del código PHP anterior escrito en el archivo PHP, pero tú solo ves aquí el resultado: </p>
        <?php
        // declaramos el bucle for para imprimir los números del 1 al 10
        for ($i = 1; $i <= 10; $i++) {
            echo $i . "<br>";
        } 
        ?>
        <br>
        <h2>Bucle FOR anidado</h2>
        <pre>

    for (inicialización; condición; incremento) {
        for (inicialización; condición; incremento) {
            // Código a ejecutar en cada iteración del bucle interno
        }   
    }
        </pre>
        <p>Ejemplo: anidamos dos bucles for para imprimir una tabla de multiplicar del 1 al 5:</p>
        <pre>
    for ($i = 1; $i <= 10; $i++) {
        echo "5 x $i = " . (5 * $i) . "\n";
    }
        </pre>
        <p>Estos valores corresponden a la salida del código PHP anterior escrito en el archivo PHP, pero tú solo ves aquí el resultado: </p>
        <?php
        // declaramos el bucle for para imprimir la tabla de multiplicar del 1 al 5
        for ($i = 1; $i <= 10; $i++) {
            echo "5 x $i = " . (5 * $i) . "<br>";
        }
        ?>
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>