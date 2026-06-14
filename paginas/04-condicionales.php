<section>
    <article>
        <h2>Condicionales en PHP</h2>
        <p><strong>Condicional if:</strong></p>
        <pre>
    if (condición) {
        // Se ejecuta si la condición es true
    } else {
        // Se ejecuta si la condición es false
    }
        </pre> 
        <p>Ejemplo:</p>    
        <pre>
    *Declaramos las variables:
    $es_estudiante = true;
    $edad = "treinta";

    if ($es_estudiante) {
        echo "Eres un estudiante.";
    } else {
        echo "No eres un estudiante.";
    }

    *Verificar si $edad es un string con el 
    método is_string():

    if (is_string($edad)) {
        echo "$edad . es un string.";
    } else {
        echo "La edad no es un string.";
    } 
        </pre>   
        <p>Estos resultados corresponden al código PHP anterior escrito en el archivo PHP, pero tú solo ves aquí el resultado: </p>
        <?php
        // declaramos las variables
        $es_estudiante = true;
        $edad = "treinta";

        // Condicionales
        if ($es_estudiante) {
            echo "Eres un estudiante.<br>";
        } else {
            echo "No eres un estudiante.<br>";
        } 
        
        if (is_string($edad)) {
            echo "$edad es un string.<br>";
        } else {
            echo "La edad no es un string.<br>";
        } ?>
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>
