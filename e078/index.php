<?php

    /******************************
     *      Operacje na katalogach
     ****************************
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
     *
    */

    $nazwa_katalogu = "classroom";

    echo "Tworzenie katalogu $nazwa_katalogu <br>";
    $czyUtworzono = mkdir($nazwa_katalogu);
    echo ($czyUtworzono === true ? "pomyślnie":"nie pomyślnie") . "<br>";

    echo "Tworzenie plików<br>";
    $pliki = array (1,2,3,4,5);
    foreach($pliki as $plik){
        touch("./$nazwa_katalogu/$plik.txt");
    }



    echo "Przeglądanie zawartości katalogu:<br>";
    if ($deskryptor_katalogu = opendir($nazwa_katalogu)){
        while (($plik = readdir($deskryptor_katalogu)) !== false){
            echo "$plik<br>";
        }
    }



    echo "Usunięcie katalogu $nazwa_katalogu <br>";
    $czyUsunieto = deleteDirectory($nazwa_katalogu);
    echo ($czyUsunieto === true ? "pomyślnie":"nie pomyślnie") . "<br>";






    function deleteDirectory($dir) {
        if (!file_exists($dir)) {
            return true;
        }
        if (!is_dir($dir)) {
            return unlink($dir);
        }
        foreach (scandir($dir) as $item) {
            if ($item == '.' || $item == '..') {
                continue;
            }
            if (!deleteDirectory($dir . DIRECTORY_SEPARATOR . $item)) {
                return false;
            }
        }
        return rmdir($dir);
    }


?>