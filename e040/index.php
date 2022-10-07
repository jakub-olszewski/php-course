<?php

    /**
     *  Definiowanie funkcji
     */
    function programowanie($jezyk = "PHP"){
        return "Programowanie w języku $jezyk";
    }

    echo programowanie() . "<br>";
    echo programowanie(null) . "<br>";
    echo programowanie('JavaScript') . "<br>";
?>

