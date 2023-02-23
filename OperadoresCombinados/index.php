<?php
    $a = 35;
    #Disminuir 1 primero se realiza el aumento
    ++$a;  

    $b = 11;
    # Después se realiza la asignación
    $b++;

    echo $a;
    echo "<br>";
    echo $b;

    #Operacion Simplificada Sumar 2 variables ->
    $a += $b;
    echo "<br>";
    echo "El Resultado de Sumar a + b = $a";

    $a -= $b;
    echo "<br>";
    echo "El resultado de Restar a - b = $a";

    $a *= $b;
    echo "<br>";
    echo "El resultado de Multiplicar a * b = $a";

    $a %= $b;
    echo "<br>";
    echo "El Modulo de a y b = $a";
?>