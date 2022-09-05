<?php
    /* 
    ----------------------------------------------
            Typy danych - Tablice wielowymiarowe
    ----------------------------------------------
    */
    # Przykład

    $dane = array(
        array(
            'nazwisko' => 'Nowak',
            'imie' => 'Anna',
            'wiek' => '22'
        ),
        array(
            'nazwisko' => 'Kowalski',
            'imie' => 'Jan',
            'wiek' => '65'
        ),
        array(
            'nazwisko' => 'Kobra',
            'imie' => 'Kai',
            'wiek' => '35'
        )
    );

    echo $dane[2]["imie"];
?>