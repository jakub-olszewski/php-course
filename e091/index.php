<?php
/**
 * 
 *      Plik: odbierz_plik.php
 *          - użyty w kolejnym przykładzie
 * 
 */
    $katalog_plik = "./uploaded/"; //katalog docelowy
    $max_rozm = $_POST['max_file_size'];
    if (is_uploaded_file($_FILES ['plik1']['tmp_name'])){
        if ($_FILES['plik1']['size'] > $max_rozm) {
            echo "Błąd! Plik ma za duży rozmiar! ";
        }else{
            echo "Plik: <b>" . $_FILES['plik1']['name'] . " </b> został odebrany. <br/>";
        
            if(isSet ($_FILES['plik1']['type']))
                echo "Typ pliku: ".$_FILES ['plik1']['type']. "<br/>";
            move_uploaded_file ($_FILES['plik1']['tmp_name'],$katalog_plik.$_FILES['plik1']['name']);
        }
    }
    else
        echo "Błąd podczas przesyłania pliku";
?>