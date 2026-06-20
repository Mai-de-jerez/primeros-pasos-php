<section>
    <article>
        <h2>Operadores en PHP</h2>
        <p><strong>Operadores aritméticos</strong></p>
        <pre>
$a = 10;
$b = 5;
$suma = $a + $b;
$resta = $a - $b;
$multiplicacion = $a * $b;
$division = $a / $b;
$modulo = $a % $b;
$incremento = $a++;
$decremento = $b--;

//imprimir resultados

echo "Suma: $suma";
echo "Resta: $resta";
echo "Multiplicación: $multiplicacion";
echo "División: $division";
echo "Módulo: $modulo";
echo "Incremento: $incremento";
echo "Decremento: $decremento";
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores en php
        // suma, resta, multiplicación, división, módulo, incremento y decremento
        $a = 10;
        $b = 5;
        $suma = $a + $b;
        $resta = $a - $b;
        $multiplicacion = $a * $b;
        $division = $a / $b;
        $modulo = $a % $b;
        $incremento = $a++;
        $decremento = $b--;
        echo "Suma: $suma<br>";
        echo "Resta: $resta<br>";
        echo "Multiplicación: $multiplicacion<br>";
        echo "División: $division<br>";
        echo "Módulo: $modulo<br>";
        echo "Incremento: $incremento<br>";
        echo "Decremento: $decremento<br>";
        ?>
    </article>
    <article>
        <p><strong>Operadores de comparación</strong></p>
        <pre>
$a = 10;
$b = 5;
if ($a = = $b) {
    echo "$a es igual a $b pero con diferente tipo de dato";
} elseif ($a = = = $b) {
    echo "$a es igual a $b y con el mismo tipo de dato";
} elseif ($a ! = $b) {
    echo "$a es diferente a $b";
} elseif ($a > $b) {
    echo "$a es mayor que $b";
} elseif ($a < $b) {
    echo "$a es menor que $b";
} elseif ($a >= $b) {
    echo "$a es mayor o igual que $b";
} elseif ($a <= $b) {
    echo "$a es menor o igual que $b";
}
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores de comparación
        $a = 10;
        $b = 5;
        if ($a == $b) {
            echo "$a es igual a $b pero con diferente tipo de dato<br>";
        } elseif ($a === $b) {
            echo "$a es igual a $b y con el mismo tipo de dato<br>";
        } elseif ($a != $b) {
            echo "$a es diferente a $b<br>";
        } elseif ($a > $b) {
            echo "$a es mayor que $b<br>";
        } elseif ($a < $b) {
            echo "$a es menor que $b<br>";
        } elseif ($a >= $b) {
            echo "$a es mayor o igual que $b<br>";
        } elseif ($a <= $b) {
            echo "$a es menor o igual que $b<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Operadores lógicos</strong></p>
        <pre>
$a = true;
$b = false;
if ($a && $b) {
    echo "$a y $b son verdaderos"; // significa literalmente Y
} elseif ($a || $b) {
    echo "$a o $b es verdadero"; // significa literalmente O
} elseif (!$a) {
    echo "$a es falso"; // significa literalmente NO
}
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores lógicos
        $a = true;
        $b = false;
        if ($a && $b) {
            echo "a y b son verdaderos<br>";
        } elseif ($a || $b) {
            echo "a o b son verdaderos<br>"; 
        } elseif (!$a) {
            echo "a es falso<br>";
        }
        ?>
    </article>
    <article>
        <p><strong>Operadores de asignación</strong></p>
        <pre>
$a = 10;
$a += 5; // $a = $a + 5
$a -= 3; // $a = $a - 3
$a *= 2; // $a = $a * 2
$a /= 4; // $a = $a / 4
$a %= 3; // $a = $a % 3
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores de asignación
        $a = 10;
        $a += 5; // $a = $a + 5
        echo "Suma: $a<br>";
        $a -= 3; // $a = $a - 3
        echo "Resta: $a<br>";
        $a *= 2; // $a = $a * 2
        echo "Multiplicación: $a<br>";
        $a /= 4; // $a = $a / 4
        echo "División: $a<br>";
        $a %= 3; // $a = $a % 3
        echo "Módulo: $a<br>";
        ?>
    </article>
    <article>
        <p><strong>Operadores de incremento y decremento</strong></p>
        <pre>
$a = 10;
$a++; // Incremento: $a = $a + 1
$a--; // Decremento: $a = $a - 1
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores de incremento y decremento
        $a = 10;
        $a++; // Incremento: $a = $a + 1
        echo "Incremento: $a<br>";
        $a--; // Decremento: $a = $a - 1
        echo "Decremento: $a<br>";
        ?>
    </article>
    <article>
        <p><strong>Operadores de concatenación</strong></p>
        <pre>
$a = "Hola";
$b = "Mundo";
$c = $a . " " . $b; // $c = $a . " " . $b
        </pre>
        <p>Salida de código: </p>
        <?php
        //operadores de concatenación
        $a = "Hola";
        $b = "Mundo";
        $c = $a . " " . $b; // $c = $a . " " . $b
        echo "Concatenación: $c<br>";
        ?>        
    </article>
</section>
<?php include 'includes/boton-volver.php'; ?>
