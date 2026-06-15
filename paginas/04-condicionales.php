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
        <p>Salida de código: </p>
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
    <article>
        <p><strong>Condicional elseif:</strong></p>
        <pre>
        // elseif: para evaluar múltiples condiciones
        $nota = 8;

        if ($nota >= 9) {
            echo "Sobresaliente";
        } elseif ($nota >= 5) {
            echo "Aprobado";
        } else {
            echo "Suspendido";
        }
        </pre>

        <p>Salida de código:</p>
        <?php
        $nota = 8;

        // Ejemplo elseif
        if ($nota >= 9) {
            echo "Sobresaliente.<br>";
        } elseif ($nota >= 5) {
            echo "Aprobado.<br>";
        } else {
            echo "Suspendido.<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Condicional switch:</strong></p>
        <pre>
        // switch: ideal para comparar una variable con muchos valores exactos
        $opcion = 'A';

        switch ($opcion) {
            case 'A':
                echo "Opción A seleccionada";
                break;
            case 'B':
                echo "Opción B seleccionada";
                break;
            default:
                echo "Opción no reconocida";
        }
        </pre>

        <p>Salida de código:</p>
        <?php
        $opcion = 'A';
        // Ejemplo switch
        switch ($opcion) {
            case 'A':
                echo "Opción A seleccionada.<br>";
                break;
            default:
                echo "Opción no reconocida.<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Operador Ternario (La forma rápida):</strong></p>
        <pre>
        // Sintaxis: (condición) ? verdadero : falso;
        echo ($edad >= 18) ? "Mayor de edad" : "Menor de edad";
        </pre>

        <p><strong>Match (La versión moderna y estricta del switch):</strong></p>
        <pre>
        // match compara de forma estricta (===) y devuelve un valor
        $resultado = match($opcion) {
            'A' => "Seleccionada A",
            'B' => "Seleccionada B",
            default => "Opción no reconocida",
        };
        echo $resultado;
        </pre>

        <p>Salida de código:</p>
        <?php
        $edad = 20;
        $opcion = 'A';

        // Ternario
        echo ($edad >= 18) ? "Mayor de edad.<br>" : "Menor de edad.<br>";

        // Match
        $resultado = match($opcion) {
            'A' => "Seleccionada A.<br>",
            'B' => "Seleccionada B.<br>",
            default => "Opción no reconocida.<br>",
        };
        echo $resultado;
        ?>
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>
