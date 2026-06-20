<section>
    <article>
        <h2>Arrays</h2>
        <p><strong>Array numérico</strong></p>
        <pre>
$frutas = array("Manzana", "Banana", "Cereza");
$arrayvacio = []; // array vacío
$arrayvacio []= "pera"; // array vacío al que se le agrega elemento
$arrayvacio[] = "naranja"; // array vacío al que se le agrega 2º elemento
$arrayvacio[] = "kiwi"; // array vacío al que se le agrega 3º elemento

// Esto se permite, pero no es recomendable, ya que no se sabe qué tipo de datos va a contener el array
$arraynumerico = array("Manzana", "Banana", "Cereza", 8, "Fruta", 3.14, true);

echo $arraynumerico[0]; // Imprime "Manzana"
echo $arraynumerico[1]; // Imprime "Banana"
echo . " &lt;br&gt;";

// o también se puede declarar así
$frutas = ["Manzana", "Banana", "Cereza"];    

// recorrer los dos arrays con un for y la función count() 
for ($i = 0; $i < count($frutas); $i++) {
    echo $frutas[$i] . " &lt;br&gt;";
}

for ($i = 0; $i < count($arrayvacio); $i++) {
    echo $arrayvacio[$i] . " &lt;br&gt;";
}

for ($i = 0; $i < count($arraynumerico); $i++) {
    echo $arraynumerico[$i] . " &lt;br&gt;";
}

// recorrer los arrays con un foreach
foreach ($arraynumerico as $fruta) {
    echo $fruta . " &lt;br&gt;";
}
        </pre>
        <p>Salida de código: </p>
        <?php
        //array numérico
        $frutas = array("Manzana", "Banana", "Cereza");
        $arrayvacio = []; // array vacío
        $arrayvacio []= "pera"; // array vacío al que se le agrega elemento
        $arrayvacio[] = "naranja"; // array vacío al que se le agrega 2º elemento
        $arrayvacio[] = "kiwi"; // array vacío al que se le agrega
        // o también se puede declarar así
        $frutas = ["Manzana", "Banana", "Cereza"];

        // Esto se permite, pero no es recomendable, ya que no se sabe qué tipo de datos va a contener el array
        // Se llama array numérico porque los índices son numéricos, empezando desde 0
        $arraynumerico = array("Manzana", "Banana", "Cereza", 8, "Fruta", 3.14, true);
        
        echo "Elemento 1 del array numérico: " . $arraynumerico[0]; // Imprime "Manzana"
        echo "<br>";
        echo "Elemento 2 del array numérico: " . $arraynumerico[1]; // Imprime "Banana"
        echo "<br>";

        // recorrer los arrays con un for y la función count() para obtener el tamaño del array
        echo "<strong>Array frutas:</strong><br>";
        for ($i = 0; $i < count($frutas); $i++) {
            echo $frutas[$i] . "<br>";
        }
        echo "<strong>Array vacío:</strong><br>";
        for ($i = 0; $i < count($arrayvacio); $i++) {
            echo $arrayvacio[$i] . "<br>";
        }
        echo "<strong>Array numérico:</strong><br>";
        for ($i = 0; $i < count($arraynumerico); $i++) {
            echo $arraynumerico[$i] . "<br>";
        }
        echo "<strong>Recorrer array numérico con foreach:</strong><br>";
        // recorrer los arrays con un foreach
        foreach ($arraynumerico as $fruta) {
            echo $fruta . "<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Array asociativo</strong></p>
        <pre>
// Array asociativo - forma simple
$arrayasociativo = [
    "nombre" => "Juan",
    "edad" => 30,
    "ciudad" => "Madrid"
];

// Array asociativo - forma larga
 $arrayasociativo2 = array(
     "nombre" => "Ana",
     "edad" => 25,
     "ciudad" => "Barcelona"
 );

echo $arrayasociativo["nombre"]; // Imprime "Juan"
echo " &lt;br&gt;";
echo $arrayasociativo["ciudad"]; // Imprime "Madrid"
echo " &lt;br&gt;";

// imprimir solo los valores del array asociativo
foreach ($arrayasociativo as $valor) {
    echo $valor . "&lt;br&gt;";
}

// imprimir solo las claves del array asociativo
foreach ($arrayasociativo as $clave => $valor) {
    echo $clave . ": " . $valor . "&lt;br&gt;";
}
        </pre>
        <p>Salida de código: </p>
        <?php
        //array asociativo
        $arrayasociativo = [
            "nombre" => "Juan",
            "edad" => 30,
            "ciudad" => "Madrid"
        ];

        echo "Imprimimos la clave 'nombre': " . $arrayasociativo["nombre"]; // Imprime "Juan"
        echo "<br>";
        echo "Imprimimos la clave 'ciudad': " . $arrayasociativo["ciudad"]; // Imprime "Madrid"
        echo "<br>";
        // imprimir solo los valores del array asociativo
        echo "<strong>Valores del array asociativo:</strong><br>";
        foreach ($arrayasociativo as $valor) {
            echo $valor . "<br>";
        }
        // imprimir solo las claves del array asociativo
        echo "<strong>Claves y valores del array asociativo:</strong><br>";
        foreach ($arrayasociativo as $clave => $valor) {
            echo $clave . ": " . $valor . "<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Malas prácticas al declarar: </strong></p>
        <pre>
            // MALA PRACTICA: crear un array multidimensional con 3 alumnos y sus notas
            $alumno1 = [
                "nombre" => "Pedro",
                "edad" => 20,
                "notas" => [8, 9, 7],
                "aprobado" => true
            ];
            $alumno2 = [
                "nombre" => "Lucía",
                "edad" => 22,
                "notas" => [9, 10, 8],
                "aprobado" => false
            ];
            $alumno3 = [
                "nombre" => "Carlos",
                "edad" => 21,
                "notas" => [7, 6, 8],
                "aprobado" => false
            ];
            // y luego los añades al array alumnos asi:
            $alumnos = [$alumno1, $alumno2, $alumno3];

            // acceder a los datos de los alumnos (porque funcionar funciona)

            echo $alumno1["nombre"] . " tiene " . $alumno1["edad"] . " años y sus notas son: " . $alumno1["notas"][0] . ", " . $alumno1["notas"][1] . ", " . $alumno1["notas"][2];
            echo "&lt;br&gt;";
            echo $alumno2["nombre"] . " tiene " . $alumno2["edad"] . " años y sus notas son: " . $alumno2["notas"][0] . ", " . $alumno2["notas"][1] . ", " . $alumno2["notas"][2];
            echo "&lt;br&gt;";
            echo $alumno3["nombre"] . " tiene " . $alumno3["edad"] . " años y sus notas son: " . $alumno3["notas"][0] . ", " . $alumno3["notas"][1] . ", " . $alumno3["notas"][2];
        </pre>
        <p>Salida de código: </p>
        <?php   
        $alumno1 = [
            "nombre" => "Pedro",
            "edad" => 20,
            "notas" => [8, 9, 7],
            "aprobado" => true
        ];
        $alumno2 = [
            "nombre" => "Lucía",
            "edad" => 22,
            "notas" => [9, 10, 8],
            "aprobado" => false
        ];
        $alumno3 = [
            "nombre" => "Carlos",
            "edad" => 21,
            "notas" => [7, 6, 8],
            "aprobado" => false
        ];
        // acceder a los datos de los alumnos (porque funcionar funciona)
        echo $alumno1["nombre"] . " tiene " . $alumno1["edad"] . " años y sus notas son: " . $alumno1["notas"][0] . ", " . $alumno1["notas"][1] . ", " . $alumno1["notas"][2];
        echo "<br>";
        echo $alumno2["nombre"] . " tiene " . $alumno2["edad"] . " años y sus notas son: " . $alumno2["notas"][0] . ", " . $alumno2["notas"][1] . ", " . $alumno2["notas"][2];
        echo "<br>";
        echo $alumno3["nombre"] . " tiene " . $alumno3["edad"] . " años y sus notas son: " . $alumno3["notas"][0] . ", " . $alumno3["notas"][1] . ", " . $alumno3["notas"][2];
        echo "<br>";
        ?>
    </article>
    <article>
        <p><strong>Buenas prácticas al declarar arrays multidimensionales:</strong></p>
        <pre>          
// BUENA PRACTICA: crear un array multidimensional con 3 alumnos y sus notas
$alumnos = [];

$alumnos[] = [
    "nombre" => "Pedro",
    "edad" => 20,
    "notas" => [8, 9, 7],
    "aprobado" => true
];
$alumnos[] = [
    "nombre" => "Lucía",
    "edad" => 22,
    "notas" => [9, 10, 8],
    "aprobado" => false
];
$alumnos[] = [
    "nombre" => "Carlos",
    "edad" => 21,
    "notas" => [7, 6, 8],
    "aprobado" => false
];

print_r($alumnos); // Imprime todo el array multidimensional
echo "&lt;br&gt;";
        </pre>
        <p>Salida de código: </p>
        <?php
        $alumnos = [];
        $alumnos[] = [
            "nombre" => "Pedro",
            "edad" => 20,
            "notas" => [8, 9, 7],
            "aprobado" => true
        ];
        $alumnos[] = [
            "nombre" => "Lucía",
            "edad" => 22,
            "notas" => [9, 10, 8],
            "aprobado" => false
        ];
        $alumnos[] = [
            "nombre" => "Carlos",
            "edad" => 21,
            "notas" => [7, 6, 8],
            "aprobado" => false
        ];
        print_r($alumnos); // Imprime todo el array multidimensional
        echo "<br>";
        ?>
    </article>
    <article>
        <p><strong>Recorrer un array multidimensional</strong></p>
        <pre>
// recorrer un array multidimensional con un for y la función sizeof() para obtener el tamaño del array
for ($i = 0; $i < sizeof($alumnos); $i++) {
    echo $alumnos[$i]["nombre"] . " tiene " . $alumnos[$i]["edad"] . " años y sus notas son: " . $alumnos[$i]["notas"][0] . ", " . $alumnos[$i]["notas"][1] . ", " . $alumnos[$i]["notas"][2] . "&lt;br&gt;";
}

// imprimir solo los alumnos que tengan algun 10 en su nota
for ($i = 0; $i < sizeof($alumnos); $i++) {
    if (in_array(10, $alumnos[$i]["notas"])) {
        echo $alumnos[$i]["nombre"] . " tiene un 10 en sus notas.&lt;br&gt;";
    }
}

// IMPRIMIR SOLO LOS NO APROBADOS
for ($i = 0; $i < sizeof($alumnos); $i++) {
    if (!$alumnos[$i]["aprobado"]) {
        echo $alumnos[$i]["nombre"] . " no ha aprobado.&lt;br&gt;";
    }
}

// podemos hacer un for anidado para recorrer los indices del array y un foreach interno 
// para recorrer los valores de cada indice del array
for ($i = 0; $i < sizeof($alumnos); $i++) {
    foreach ($alumnos[$i] as $clave => $valor) {
        if (is_array($valor)) {
            echo $clave . ": " . implode(", ", $valor) . "&lt;br&gt;";
        } else {
            echo $clave . ": " . $valor . "&lt;br&gt;";
        }
    }
    echo "&lt;br&gt;";
}
</pre>
        <p>Salida de código: </p>
        <?php
        // recorrer un array multidimensional con un for y la función sizeof() para obtener el tamaño del array
        for($i = 0; $i < sizeof($alumnos); $i++) {
            echo $alumnos[$i]["nombre"] . " tiene " . $alumnos[$i]["edad"] . " años y sus notas son: " . $alumnos[$i]["notas"][0] . ", " . $alumnos[$i]["notas"][1] . ", " . $alumnos[$i]["notas"][2] . "<br>";
        }

        // imprimir solo los alumnos que tengan algun 10 en su nota
        echo "<strong>Alumnos con un 10 en sus notas:</strong><br>";
        for ($i = 0; $i < sizeof($alumnos); $i++) {
            if (in_array(10, $alumnos[$i]["notas"])) {
                echo $alumnos[$i]["nombre"] . " tiene un 10 en sus notas.<br>";
            }
        }

        // IMPRIMIR SOLO LOS NO APROBADOS
        echo "<strong>Alumnos no aprobados:</strong><br>";
        for ($i = 0; $i < sizeof($alumnos); $i++) {
            if (!$alumnos[$i]["aprobado"]) {
                echo $alumnos[$i]["nombre"] . " no ha aprobado.<br>";
            }
        }

        // podemos hacer un for anidado para recorrer los indices del array y un foreach interno 
        // para recorrer los valores de cada indice del array        
        echo "<strong>Detalles de todos los alumnos:</strong><br>";
        for ($i = 0; $i < sizeof($alumnos); $i++) {
            foreach ($alumnos[$i] as $clave => $valor) {
                if (is_array($valor)) {
                    echo $clave . ": " . implode(", ", $valor) . "<br>";
                } else {
                    echo $clave . ": " . $valor . "<br>";
                }
            }
            echo "<br>";
        }
        ?>
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>



