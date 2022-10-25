<?php

    /**
     * Znajdowanie podciągów
     * 
     * strstr(źródło, szukany_ciąg)
     *      return 
     *         false - jeśli nie znaleziono ciągu
     *         ciąg od szukanego fragmentu do końca 
     * 
     */


     $dane = "Jan Kowalski, ul. Nowa 23, 80-876 Warszawa, tel. 693341678";

     $tel = strstr($dane, "tel.");

     echo $tel;

?>