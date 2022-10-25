<?php

    /**
     * Znajdowanie podciągów
     * 
     * strcmp(ciag1, ciag2)
     *      return
     *          <0 jeśli ciąg1 jest mniejszy od ciąg2
     *          >0 jeśli ciąg1 jest większy od ciąg2
     *          =0 jeśli są równe
     * 
     */


    $dane = "Jan Kowalski, ul. Nowa 23, 80-876 Warszawa, tel. 693341678";

    $wynik =  substr($dane, 4, 8);

    echo "Czy równe ? " . strcmp($wynik,"Kowalski");

    echo "<br>";

    echo "Czy równe ? " . czyRowne($wynik,"Kowalski");

    function czyRowne($ciag1, $ciag2){
        return (strcmp($ciag1, $ciag2) === 0) ? "tak" : "nie";
    }

?>