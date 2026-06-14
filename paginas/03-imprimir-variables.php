<section>
    <article>
        <h2>Imprimir variables y alterar tipos</h2>
        <p>Puedes imprimir variables utilizando la función <strong>echo</strong>. Además, puedes alterar el tipo de una variable simplemente asignándole un nuevo valor de un tipo diferente.</p>
        <p>Ejemplo:</p>
    <pre> 
    echo "Hola, $nombre!";
    echo "Tienes $edad años";
    </pre>    
        <p>Dadas las siguientes variables:</p>
            <ul>
                <li><strong>$nombre = "Hola Mundo";</strong> (Cadena de texto")</li>
                <li><strong>$edad = 42;</strong> (Número entero)</li>
                <li><strong>$altura = 3.14;</strong> (Número con decimales)</li>
                <li><strong>$es_estudiante = true;</strong> (Valor de verdad)</li>
                <li><strong>$arreglo = array(1, 2, 3);</strong> (Colección de valores)</li>
                <li><strong>$arreglo2 = ["Juan", "Pepa", "Luis"];</strong> (Arreglo con varios valores)</li>
                <li><strong>$nulo = null;</strong> (Representa la ausencia de valor)</li>
                <li><strong>$boolean = false;</strong> (Valor booleano)</li>
            </ul>
            <?php
            // Tipos de datos en PHP
            $nombre = "Mundo"; // String
            $edad = 30; // Integer
            $altura = 1.75; // Float
            $es_estudiante = true; // Boolean
            $booleano = false; // Boolean
            $arreglo = array(1, 2, 3); // Array
            $arreglo2 = ["Juan", "Pepa", "Luis"]; // Array
            $nulo = null; // Null
            $boolean = 0; // Boolean
            ?>

        <p>Estas variables están impresas desde el código PHP pero tú aquí solo ves el resultado:</p>
        <?php
        // Imprimir variables
        echo "Hola, $nombre!<br>";
        echo "Tienes $edad años.<br>";
        echo "Tu altura es $altura metros.<br>";
        echo "¿Eres estudiante? " . ($es_estudiante ? "Sí" : "No") . "<br>";
        echo "El valor booleano es: " . ($boolean ? "Verdadero" : "Falso") . "<br>";
        echo "El arreglo contiene: " . implode(", ", $arreglo) . "<br>";
        echo "El último elemento del arreglo2 es: " . $arreglo2[count($arreglo2) - 1] . "<br>";
        echo "El arreglo2 contiene: " . implode(", ", $arreglo2) . "<br>";
        echo "El valor nulo es: " . var_export($nulo, true) . "<br>";
        echo "El valor boolean es: " . ($boolean ? "Verdadero" : "Falso") . "<br>";              
        ?>
        <br>
        <p>Alteremos el valor de las variables:</p>
        <pre>

    $edad = "treinta"; // Ahora $edad es un string
    $boolean = 1; // Ahora $boolean es verdadero
        </pre>
        <p>Resultado del código: </p>
        <?php
        $edad = "treinta"; // Ahora $edad es un string
        echo "Ahora la edad es: $edad años.<br>";
        // Alterar el valor de boolean a verdadero
        $boolean = 1;
        echo "Ahora el valor boolean es: " . ($boolean ? "Verdadero" : "Falso") . "<br>";
        ?>
    </article>
    <article>
        <h2>Otras formas de imprimir</h2>
        <p><strong>print()</strong> — igual que echo pero devuelve 1:</p>
        <pre>
    print("Hola, $nombre!");
    // Hola, Mundo!
        </pre>
        <?php print("Hola, $nombre!<br>"); ?>

        <p><strong>printf()</strong> — imprime con formato de plantilla:</p>
        <pre>
    printf("Tienes %d años y mides %.2f metros", $edad, $altura);
    // Tienes 30 años y mides 1.75 metros
        </pre>
        <?php printf("Tienes %d años y mides %.2f metros<br>", 30, $altura); ?>
        
        <p><strong>var_dump()</strong> — muestra el tipo y el valor:</p>
        <pre>
    var_dump($arreglo);
    // array(3) { [0]=> int(1) [1]=> int(2) [2]=> int(3) }
        </pre>
        <?php var_dump($arreglo); ?>

        <p><strong>print_r()</strong> — más legible, ideal para arrays:</p>
        <pre>
    print_r($arreglo);
    // Array ( [0] => 1 [1] => 2 [2] => 3 )
        </pre>
        <?php print_r($arreglo); ?>

        <p><strong>var_export()</strong> — muestra sintaxis PHP válida:</p>
        <pre>
    var_export($arreglo);
    // array ( 0 => 1, 1 => 2, 2 => 3 )
        </pre>
        <?php var_export($arreglo); ?>

        <p><strong>printf()</strong> — formato con plantilla:</p>
        <pre>
    printf("Tienes %d años y mides %f metros", $edad, $altura);
        </pre>
        <?php printf("Tienes %s años y mides %f metros", $edad, $altura); ?>

    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>