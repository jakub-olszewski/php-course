<?php

    /******************************
     *      Odczyt z pliku
     *****************************
     *
     * fgetc(deskryptor)
     *      return odczyt pojedynczego znaku
     *          false - osiągnięty koniec pliku
     *         
    */

    $nazwa_pliku = "dane.txt";

    if(!$plik = fopen($nazwa_pliku,"r")){

        echo "Nie można otworzyć pliku $nazwa_pliku";

    }else{

        while( ($znak = fgetc($plik)) !== false){// dopóki fgetc nie osiągnie końca pliku

            echo "$znak";

        }

        fclose($plik);
    }
    
?>