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
        <pre>
$nombre = "Mundo"; // String
$edad = 30; // Integer
$altura = 1.75; // Float
$es_estudiante = true; // Boolean
$booleano = false; // Boolean
$arreglo = array(1, 2, 3); // Array
$arreglo2 = ["Juan", "Pepa", "Luis"]; // Array
$nulo = null; // Null
$boolean = 0; // Boolean

// Podemos imprimirlas con echo:

echo "Hola, $nombre!";
echo "Tienes $edad años.";
echo "Tu altura es $altura metros";
echo "¿Eres estudiante? " . ($es_estudiante ? "Sí" : "No")";
echo "El valor booleano es: " . ($boolean ? "Verdadero" : "Falso")";
echo "El arreglo contiene: " . implode(", ", $arreglo)";
echo "El último elemento del arreglo2 es: " . $arreglo2[count($arreglo2) - 1]";
echo "El arreglo2 contiene: " . implode(", ", $arreglo2)";
echo "El valor nulo es: " . var_export($nulo, true)";
echo "El valor boolean es: " . ($boolean ? "Verdadero" : "Falso")"; 
        </pre>
            <p>Salida de código:</p>
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
echo "Ahora la edad es: $edad años.";

// Alterar el valor de boolean a verdadero
$boolean = 1;
echo "Ahora el valor boolean es: " . ($boolean ? "Verdadero" : "Falso")";
        </pre>
        <p>Salida del código: </p>
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
        </pre>
        <?php print("Salida de código: Hola, $nombre!<br>"); ?><br>
        <p><strong>printf()</strong> — imprime con formato de plantilla:</p>
        <pre>
    printf("Tienes %d años y mides %.2f metros", $edad, $altura);
        </pre>
        <?php printf("Salida de código: Tienes %d años y mides %.2f metros<br>", 30, $altura); ?><br>        
        <p><strong>var_dump()</strong> — muestra el tipo y el valor:</p>
        <pre>
    var_dump($arreglo);
        </pre>
        <?php print("Salida de código: ");var_dump($arreglo); ?><br><br>
        <p><strong>print_r()</strong> — más legible, ideal para arrays:</p>
        <pre>
    print_r($arreglo);
        </pre>
        <?php print("Salida de código: ");print_r($arreglo); ?><br><br>

        <p><strong>var_export()</strong> — muestra sintaxis PHP válida:</p>
        <pre>
    var_export($arreglo);
        </pre>
        <?php print("Salida de código: ");var_export($arreglo); ?><br><br>

        <p><strong>printf()</strong> — formato con plantilla:</p>
        <pre>
    printf("Tienes %d años y mides %f metros", $edad, $altura);
        </pre>
        <?php printf("Salida de código: Tienes %s años y mides %f metros", $edad, $altura); ?>

    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>