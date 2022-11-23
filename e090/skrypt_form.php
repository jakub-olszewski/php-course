<?php
    echo "Dziękujemy ! Rejestracja przebiegła pomyslnie. <br/>";
    echo "Wprowadzone dane: <br/>";
    echo "Nazwisko : <b>".trim ($_POST ['nazw'])."</b><br/>";
    echo "Imię: <b>",trim ($_POST['im']). "</b><br/>";
    echo "Zawód: <b>". trim ($_POST ['zaw']). "</b></br>";
    echo "Adres e-mail: <b>".trim ($_POST ['adr'])."</b><br/>";

    if(!isSet($_POST['wykszt']) )
        echo "Proszę zaznaczyć pole <b>wykształcenie</b> ";
    else
        echo "Wykształcenie: <b>".trim($_POST['wykszt'])."</b><br>";

    echo "<p><b>Znajomość jezyków: </b></p>";

    if (!empty($_POST['jezyki'])){
        echo "<ul>";
        foreach ($_POST['jezyki'] as $wartosc)
        echo "<li>$wartosc</li>" ;
        echo "</ul>";
    }
    else{
        echo "<p><b>".$_POST['nazw']. "</b> nie zna żadnego jezyka.</p>";
    }
?>