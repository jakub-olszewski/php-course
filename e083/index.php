<?php

    /**
     * skrypt_form.php
     * - użyty w kolejnym przykładzie
     * 
     * Umieszczony poniżej skrypt PHP będzie rozpoznawał, 
     * która opcja pola typu radio została zaznaczona w formularzu
     * 
     */

    echo "Odpowiedź z PHP: <b><br/>". $_POST['nazw']."</b>";
    echo "<b>" . $_POST['im']  . "</b><br>";
    echo "<b>" . $_POST['zaw'] . "</b><br>";
    echo "<b>" . $_POST['adr'] . "</b><br>";
    echo "Zostało wybrane wykształcenie : {$_POST['wykszt']}.";
    
?>