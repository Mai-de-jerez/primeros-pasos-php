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
        <p>Salida de código: </p>
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
        <p>Ejemplo: anidamos dos bucles for para imprimir una pirámide de asteriscos:</p>
        <pre>
        // Bucle externo: controla la fila en la que estamos (del 1 al 5)
        for ($i = 1; $i <= 5; $i++) {
            
            // Bucle interno: imprime tantos asteriscos como indique la fila actual
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            
            // Salto de línea después de terminar cada fila
            echo "&lt;br&gt;";
        }
        </pre>
        <p>Salida de código: </p>
        <?php
        // Bucle externo: controla la fila en la que estamos (del 1 al 5)
        for ($i = 1; $i <= 5; $i++) {
            
            // Bucle interno: imprime tantos asteriscos como indique la fila actual
            for ($j = 1; $j <= $i; $j++) {
                echo "* ";
            }
            
            // Salto de línea después de terminar cada fila
            echo "<br>";
        }
        ?>
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>