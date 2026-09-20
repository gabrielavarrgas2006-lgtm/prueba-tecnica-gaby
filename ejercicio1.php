<?php
$numeros = array(10, 5, 8, 20, 3, 15, 7);

$mayor = $numeros[0];
$menor = $numeros[0];
$suma = 0;
$contador = 0;

foreach ($numeros as $numero) {
    if ($numero > $mayor) {
        $mayor = $numero;
    }
    if ($numero < $menor) {
        $menor = $numero;
    }
    $suma= $suma + $numero;
    if ($numero > 10) {
        $contador++;
    }
}

$promedio = $suma / 7;

echo "Numero mayor: " . $mayor . "<br>";
echo "Numero menor: " . $menor . "<br>";
echo "Suma: " . $suma . "<br>";
echo "Promedio: " . $promedio . "<br>";
echo "Numeros mayores que 10: " . $contador;
