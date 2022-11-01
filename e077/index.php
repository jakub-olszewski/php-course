<?php

    /******************************
     *      Operacje na katalogach
     ****************************
     *
     * mkdir('nazwa_katalogu')
     *      tworzenie katalogu
     * 
     * rmdir('nazwa_katalogu')
     *      usuwanie katalogu
     * 
     * opendir('nazwa_katalogu')
     *      otwieranie katalogu
     * 
     * readdir(deskryptor)
     *      odczyt zawartości
     * 
     * closedir(deskryptor)
     *      zamykanie katalogu
     * 
     * scandir('nazwa_katalogu')
     *      skanowanie zawartości katalogu
     * 
     * is_dir('nazwa_katalogu')
     *      czy to katalog
     * 
     *
    */

    $nazwa_katalogu = "classroom";

    echo "Tworzenie katalogu $nazwa_katalogu <br>";
    $czyUtworzono = mkdir($nazwa_katalogu);
    echo $czyUtworzono . "<br>";

    echo "Czy $nazwa_katalogu to katalog ? " . (is_dir($nazwa_katalogu) === true ? "tak":"nie") . "<br>";

    echo "Usunięcie katalogu $nazwa_katalogu <br>";
    $czyUsunieto = rmdir($nazwa_katalogu);
    echo $czyUsunieto . "<br>";


?>