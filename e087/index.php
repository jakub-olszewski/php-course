<?php
/**
 *      Instrukcja if(!empty($_POST['języki']) sprawdza, czy tablica $_ POST['języki'] jest pusta.
 *      Jeżeli nie, to nastąpi wyświetlenie zawartości każdego elementu tablicy. W tablicy znajdują
 *      się wartości znacznika option value= . . .  wybrane przez użytkownika. Ta technika może
 *      być stosowana do różnych elementów, nie tylko do pól SELECT. Jeżeli kilku polom nadamy
 *      taką samą nazwę i nazwa pola będzie kończyła się nawiasem kwadratowym, to PHP połączy
 *      wszystkie wartości o tej samej nazwie pola w jedną tablicę.
 * 
 */

    if (!empty ($_POST['jezyki'])){
        echo "<p><b>".$_POST['nazw']. "</b> zna:</p>";
        echo "<ul>";
        foreach ($_POST['jezyki'] as $wartosc){
            echo "<li> $wartosc</li>";
        }

        echo "</ul>";
    }
    else{
        echo "<p><b>".$_POST['nazw']."</b> nie zna żadnego języka.</p>";
    }

?>