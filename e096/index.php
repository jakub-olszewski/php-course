<?php

/**
 * Data ostatnich odwiedzin na stronie
 * 
 * W podanym przykładzie sprawdzamy, czy istnieje plik cookie. 
 * Jeżeli tak, to wyświetli się informacja powitalna oraz data ostatniej wizyty.
 */

    if(isSet($_COOKIE['wizyta'])){
        $ostatnia = $_COOKIE['wizyta'];
        echo "Witamy ponownie! <br> Ostatni raz odwiedziłeś nas: ". $ostatnia;
    }
    else{
        echo "Witamy na naszej stronie";
    }

?>



