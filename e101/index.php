<?php

/**
 * ============================================
 * Uwierzytelnienie użytkownika
 * ============================================
 * 
 * Plik: loguj.php
 * - zawiera procedury autoryzacji użytkownika i formularz logowania.
 * 
 * Skrypt autoryzacji użytkownika zaczyna się od wywołania funkcji session_start(), 
 * która rozpoczyna sesję. Następnie sprawdzane jest, czy istnieje zmienna sesji $log. 
 * Jest to zmienna, która powinna zawierać nazwę zalogowanego użytkownika. 
 * Jeżeli zmienna istnieje, to znaczy, że stronę próbuje otworzyć zalogowany użytkownik. 
 * Zostanie on przekierowany do strony głównej. Jeżeli zmienna $log nie została ustawiona, 
 * ale w tablicy $_POST znajdują się dane (nazwa użytkownika i hasło), 
 * należy sprawdzić poprawność wprowadzonych danych. Następuje sprawdzenie, 
 * czy dane prowadzone w czasie logowania są prawidłowe. Jeżeli weryfikacja przebiegła pomyślnie, 
 * oznacza to, że niezalogowany użytkownik wypełnił poprawnie formularz logowania i należy go zalogować. 
 * Zmiennej sesji $log zostaje przypisana nazwa zalogowanego użytkownika i użytkownik zostanie przekierowany do strony głównej.
 * 
 * Jeżeli weryfikacja danych jest negatywna, wyświetla się komunikat informujący o nieprawidłowych danych logowania,
 * a następnie wyświetla się formularz logowania.
 */

session_start();

if (isSet($_SESSION['log'])){

    header('location: strona.php');
    exit();

}else if (isSet($_POST['nazwa']) && isSet($_POST['haslo'])){

    if ($_POST['nazwa']=='janek' && $_POST['haslo'] == 'jan23') {
        $_SESSION['log'] = $_POST['nazwa'];
        header('location: strona.php');
        exit();
    }else{
        echo "Nieprawidłowe dane logowania<br>";
    }
    
}
?>

<!DOCTYPE HTML>
<html>
    <head>
        <title>Autoryzacja danych</title>
        <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
        <meta charset="UTF-8">
        <style>
            p.fo {
                font-weight: bold;
                font-size: 11pt;
            }
            #log {
                font-weight: bold;
                font-size: 14pt;
            }
        </style>
    </head>
    <body>
        <div>
            <form action="loguj.php" method="post">
                <p id="log">Logowanie</p>
                <p class="fo">Nazwa użytkownika:</p>
                <input type=text name="nazwa" value="" size="25"><br/>
                <p class="fo">Hasło:</p>
                <input type="password" name="haslo" value="" size="25">
                <input type="submit" value="Zaloguj się">
            </form>
        </div>
    </body>
</html>