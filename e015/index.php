<?php

    # Przykład
    $x = 23.75;
    $y = (integer) $x;

    echo "$x <br>";
    echo "$y <br>";

    /*

    wykorzystanie funkcji 
    
        settype($zmienna, 'nowy typ');

    * zmiana pomyślna zwraca true w przypadku błędu false
    * zmiana następuje w sposób trwały

    */

    $y = 93.234;
    echo "Zadeklarowana wartość zmiennej \$x: $y <br>";
    
    settype($y,'string');
    echo "Wartość zmiennej \$x po zmianie typu na string : $y <br>";
    
    settype($y,'integer');
    echo "Wartość zmiennej \$x po zmianie typu na integer : $y <br>";

?>