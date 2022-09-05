<?php
    /* 
    ----------------------------------------------
            Typy danych - Tablice asocjacyjne
    ----------------------------------------------

    definicja

        $tab = array(
            klucz1 => wartosc1,
            klucz2 => wartosc2,
            ...
            kluczn => wartoscn,
        );
    
    lub
    
        $tab[klucz1] = wartosc1;
        $tab[klucz2] = wartosc2;
        ...
        $tab[kluczn] = wartoscn;

    */

    # Przykład

    $osoba = array(
        'nazwisko' => 'Nowak',
        'imie' => 'Anna',
        'wiek' => '22'
    );

    echo "Osoba " . $osoba["imie"] . ' ' . $osoba["nazwisko"] . " wiek " . $osoba["wiek"] . '<br>';


    $zwierze["nazwa"] = 'Kot w butach';
    $zwierze["wiek"] = 5;
    $zwierze["film"] = 'Shrek';

    echo $zwierze["nazwa"] . ' z filmu ' . $zwierze["film"];
?>
