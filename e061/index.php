<?php

    /**
     * Znajdowanie podciągów
     * 
     * strtok(źródło, znak)
     *      return
     *          ciągi podzielonego ciągu źródło znakiem
     *          
     */


    $dane = "Jan Kowalski, ul. Nowa 23, 80-876 Warszawa, tel. 693341678";

    $znak = ",";

    $ciag = strtok($dane, $znak);

    while(is_string($ciag)){
        if($ciag){
            echo "$ciag<br>";
        }
        $ciag = strtok($znak);
    }


?>