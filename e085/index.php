<?php

    /**
     * skrypt_form.php
     * - użyty w kolejnym przykładzie
     * 
     * W podanym skrypcie do sprawdzenia, czy zaznaczone zostało pole opcji, 
     * zastosowano instrukcję warunkową if oraz funkcję isSet(). 
     * W warunku !isSet($_POST['wykszt']) został użyty operator logicznej negacji !,
     *  czyli warunek zwróci wartość true, gdy pole nie zostanie wypełnione, i 
     * będzie wysłany komunikat "Proszę zaznaczyć pole Wykształcenie". 
     * W przeciwnym razie za pomocą składni $_POST['wykszt'] zostanie 
     * odczytana z tablicy $_POST wartość opcji wykszt 
     * (będzie to wartość atrybutu value dla znacznika input type="radio").
     */

    if(!isSet($_POST['wykszt'])){
        echo "<br/>Proszę zaznaczyć pole <b>Wykształcenie</b>";
    }else{
        echo "<br/>Zostało wybrane wykształcenie : {$_POST['wykszt']}. ";
    }
?>