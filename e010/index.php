<?php
    /* 
    ----------------------------------
            Użycie składni heredoc
    ----------------------------------
    */
    $napis = "napis";
    $tekst = <<<TX
        Tutaj rozpoczyna się $napis. 
        Ten napis powstał z wykorzystaniem
        składni heredoc.
    TX;
    echo $tekst;
?>