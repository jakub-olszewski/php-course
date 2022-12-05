<?php

/**
 * ============================================
 * Koszyk zakupów
 * ============================================
 * 
 * Plik: koszyk.php
 * 
 * Podany kod otwiera sesję (funkcja session_start() ), następnie sprawdza, 
 * czy istnieje tablica $_SESSION['koszyk']. Jeżeli istnieje, 
 * to w pętli wyświetlana jest lista wartości tablicy $_SESSION['koszyk'].
 *
 */

session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Koszyk</title>
        <meta http-equiv="content-type" content="text/html;charset=UTF-8">
    </head>
    <body>
    <p><b>Zawartosć koszyka</b></p>
    <?php
        if (isSet($_SESSION['koszyk'])){
            foreach (unserialize($_SESSION['koszyk']) as $produkt) {
                echo "<li>" . $produkt ."</li>";
            }
        }
        else{
            echo "brak sesji";
        }
    ?>
    <a href="index.php">Przejdź do listy produktów</a></p>
    </body>
</html>