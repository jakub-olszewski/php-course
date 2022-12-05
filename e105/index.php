<?php

/**
 * ============================================
 * Koszyk zakupów
 * ============================================
 * 
 * Plik: lista.php / index.php
 * 
 * W skrypcie zostały użyte funkcje działające na tablicach:
 * - array_unique(tablica) — pobiera tablicę i zwraca nową tablicę bez powtarzających się wartości;
 * - array_merge(tablical, tablica2, ...) — łączy elementy wybranych tablic i zwraca tablicę wynikową;
 * - unserialize(łańcuch) — pobiera łańcuch znaków i przekształca go na wartość.
 *
 */

session_start();
?>
<!DOCTYPE HTML>
<html>
    <head>
        <title>Koszyk zakupów</title>
        <meta http-equiv= "Content-Type" content="text/html;charset-UTF-8">
    </head>
<body>
<p><b>Lista artykułów</b></p>
<?php
if (isSet($_POST['lista'])){
    if (!empty($_SESSION['koszyk'])){
        $koszyk=array_unique(array_merge(
            unserialize($_SESSION['koszyk']),
            $_POST['lista'])
        );
        $_SESSION['koszyk'] = serialize($koszyk) ;
    }else{
        $_SESSION['koszyk'] = serialize($_POST['lista']);
    }
    echo "<p>Wybrane produkty zostały umieszczone w koszyku</p>";
}
?>
<form action="index.php" method="post">
<p><b><font size="4"><b>Wybór produktu:</font></b><br>
<select name="lista[]" multiple="multiple" size="9">
<option value="Monitor">Monitor</option>
<option value="Drukarka">Drukarka</option>
<option value="Klawiatura">Klawiatura</option>
<option value="Myszka">Myszka</option>
<option value-"Głośniki">Giośniki</option>
<option value="Kamera internetowa">Kamera internetowa</option>
<option value="słuchawki">Słuchawki</option>
<option value="Stacja DVD">Stacja DVD</option>
<option value="Dysk twardy">Dysk twardy</option>
</select></p>
<p><input type="submit" value="Dodaj do koszyka"></p>
</form>
<p><a href="koszyk.php">Przejdź do koszyka</a></p>
</body>
</html>