<?php

    /**
     * Znajdowanie podciągów
     * 
     * strpos(źródło, szukany_ciąg, index_rozpoczęcia)
     *      return 
     *         położenie
     *         false - brak szukanego fragmentu
     * 
     * substr(źródło, index_początku, [długość])
     *      return
     *          ciąg znaków od index_początku do końca jeśli nie ma długość
     *          lub do index_początku + długość
     */


    $dane = "Jan Kowalski, ul. Nowa 23, 80-876 Warszawa, tel. 693341678";

    echo substr($dane, 4, 8);

?>