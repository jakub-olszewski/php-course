<?php

    /**
     * Funkcje zmiany wielkości liter
     * 
     */

    $tekst = "Daleka droga przez naukę, krótka i skuteczna przez przykłady.";

    echo "toUpper :" . "<br>" . strtoupper($tekst) . "<br><br>";

    echo "toLower :" . "<br>" . strtolower($tekst) . "<br><br>";

    echo "<hr>" . "z kodowaniem :" . "<hr><br>";

    echo "toUpper :" . "<br>" . mb_strtoupper($tekst,"utf-8") . "<br><br>";

    echo "toLower :" . "<br>" . mb_strtolower($tekst,"utf-8") . "<br><br>";

    echo "<hr>" . "uc :" . "<hr><br>";

    echo "ucfirst :" . "<br>" . ucfirst($tekst) . "<br><br>";

    echo "ucwords :" . "<br>" . ucwords($tekst) . "<br><br>";
?>