<?php
    /*
            Instrukcja warunkowa
    */

    $x = 11;
    $y = 7;

    # nie wykluczająca się
    if ($y > $x)
        echo "Wartość zmiennej y jest większa od wartości zmiennej x.";
    
    if ($y < $x)
        echo "Wartość zmiennej x jest większa od wartości zmiennej y.";
    
    echo '<br>';

    // z użyciem wykluczenia
    if ($y > $x)
        echo "Wartość zmiennej y jest większa od wartości zmiennej x.";
    else
        echo "Wartość zmiennej x jest większa od wartości zmiennej y.";
    
    echo '<br>';

    # użycie elseif 
    $z = $x + $y;

    if ($z < 0 ){
        echo "Wartość zmiennej z jest ujemna";
    }elseif ($z < 10){
        echo "Wartość zmiennej z jest w zakresie od 0 do 10.";
    }elseif ($z < 20 ){
        echo "Wartość zmiennej z jest w zakresie od 10 do 20.";
    }elseif ($z < 30 ){       
        echo "Wartość zmiennej z jest w zakresie od 20 do 30.";
    }elseif ($z > 30 ){       
        echo "Wartość zmiennej z jest większa od 30.";
    };


    
?>