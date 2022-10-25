<?php

    /******************************
     *      Odczyt z pliku
     ****************************
     *
     * file_get_contents('nazwa_pliku',[opcjonalny_argument])
     *      return zwraca zawartość pliku
     *          false - jak się nie powiedzie
     * 
     * 
     * FILE_USE_INCLUDE_PATH — po nazwie opcji powinny zostać wymienione katalogi, 
     *                          które zostaną przeszukane, jeżeli wskazanego pliku
     *                          nie będzie w bieżącym katalogu.
     * FILE_IGNORE_NEW_LINES — opcja ignoruje znaki końca linii.
     * FILE_SKIP_EMPTY_LINES — opcja ignoruje puste linie.
     * 
     * 
     * file('nazwa_pliku')
     *      return tablica linii w pliku
     *
    */

    $nazwa_pliku = "dane.txt";

    echo "<br><br>file_get_contents FILE_SKIP_EMPTY_LINES<br>";


    echo file_get_contents($nazwa_pliku,'FILE_SKIP_EMPTY_LINES');

    echo "<br><br>file_get_contents<br>";


    echo file_get_contents($nazwa_pliku);

    echo "<br><br>file<br>";


    $lines = file($nazwa_pliku);

    foreach ($lines as $line){
        echo $line . "<br>";
    }

?>