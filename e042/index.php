<?php

    /**
     *  Zliczanie elementów tablicy :
     * 
     *  count() 
     *  sizeof()
     */

     $tab = array("e1","e2","e3","e4","e5","e6");
     $count = count($tab); // ilość elementów

     for($i = 0; $i < $count; $i++){ // for( warunek_pocz; warunek_końc; krok )
        echo $tab[$i], " ";
     }
     
?>

