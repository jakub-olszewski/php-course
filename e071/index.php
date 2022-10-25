<?php

    /******************************
     *      Zapis do pliku
     ******************************
    */

    $nazwa_pliku = "dane.txt";
    $zawartosc = "Określenie deskryptor pliku jest używane głównie w systemach operacyjnych zgodnych z normą POSIX. W terminologii Microsoft Windows używane jest określenie 'uchwyt pliku' (ang. file handle).\n\n";

    if(!$plik = fopen($nazwa_pliku,"a")){// a - tryb dopisywania
        echo "Nie można otworzyć pliku $nazwa_pliku";
    }else{
        if(fwrite($plik,$zawartosc) === false){
            echo "Zapis do pliku $nazwa_pliku nie powiódł się!";
        }else{
            echo $zawartosc;
        }
        fclose($plik);
    }
    

?>