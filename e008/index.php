<?php
    /* 
            Zmienne predefiniowane

            _GET name , aby pobrać trzeba zdefiniować :

            przykład:

                index.php?name=James

    */
    echo 'Hello ' . htmlspecialchars($_GET["name"]) . '!';
    echo '<br><br>';

    // po kliknięciu w przycisk zwróć uwagę na adres
    // apostrof ' jest wyłączony znakiem \
    echo '<input type="button" value="Ustaw wartość name" onClick="document.location.href=\'?name=James\'" />';

?>
