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
        <?php include 'includes/header.php'; ?>
    </header>
    <main>
        <h1>Aprendiendo PHP</h1>
        <section>
            <article>
                <h2>Tipos de datos en PHP</h2>
                <p>En PHP, existen varios tipos de datos que se pueden utilizar para almacenar información. Algunos de los tipos de datos más comunes son:</p>
                <ul>
                    <li><strong>$nombre = "Hola Mundo";</strong> (Cadena de texto")</li>
                    <li><strong>$edad = 42;</strong> (Número entero)</li>
                    <li><strong>$altura = 3.14;</strong> (Número con decimales)</li>
                    <li><strong>$es_estudiante = true;</strong> (Valor de verdad)</li>
                    <li><strong>$arreglo = array(1, 2, 3);</strong> (Colección de valores)</li>
                    <li><strong>$arreglo2 = ["Juan", "Pepa", "Luis"];</strong> (Arreglo con varios valores)</li>
                    <li><strong>$nulo = null;</strong> (Representa la ausencia de valor)</li>
                    <li></li><strong>$boolean = false;</strong> (Valor booleano)</li>
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
            </article>
            <article>
                <h2>Comentarios en PHP</h2>
                <p>En PHP, puedes escribir comentarios de dos formas:</p>
                <ul>
                    <li><strong>// Comentario de una sola línea</strong></li>
                    <li><strong>/* Comentario de varias líneas */</strong></li>
                </ul>
            </article>
            <article>
                <h2>Imprimir variables y alterar tipos</h2>
                <p>Puedes imprimir variables utilizando la función <strong>echo</strong>. Además, puedes alterar el tipo de una variable simplemente asignándole un nuevo valor de un tipo diferente.</p>
                <p>Ejemplo:</p>
<pre>
echo "Hola, $nombre!";<br>
echo "Tienes $edad años";<br>
</pre>
            
                <p>Estas variables están impresas desde el código PHP pero tú aquí solo ves el resultado:</p>
                <?php
                // Imprimir variables
                echo "Hola, $nombre!<br>";
                echo "Tienes $edad años.<br>";
                echo "Tu altura es $altura metros.<br>";
                echo "¿Eres estudiante? " . ($es_estudiante ? "Sí" : "No") . "<br>";
                echo "El valor booleano es: " . ($boolean ? "Verdadero" : "Falso") . "<br>";
                echo "El arreglo contiene: " . implode(", ", $arreglo) . "<br>";
                echo "El nombre del segundo elemento del arreglo2 es: " . $arreglo2[-1] . "<br>";
                echo "El arreglo2 contiene: " . implode(", ", $arreglo2) . "<br>";
                echo "El valor nulo es: " . var_export($nulo, true) . "<br>";
                echo "El valor boolean es: " . ($boolean ? "Verdadero" : "Falso") . "<br>";             
                ?>
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
    </main> 
    <footer>
        <?php include 'includes/footer.php'; ?>
    </footer>
</body>
</html>


