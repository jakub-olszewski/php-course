<?php

    /**
     *  Definiowanie funkcji
     */
    function styl($tekst, $kolor = "red"){// kolor wartość domyślna red
        return "<p style=\"color: $kolor\">" . $tekst . "</p>";
    }

    echo styl("Programowanie w PHP", 'green');
    echo styl("Tematy:","blue");
    echo styl('JavaScript');
?>

