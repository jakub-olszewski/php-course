<?php
    /* 
    ----------------------------------
            Użycie składni nowdoc
    ----------------------------------
    */
    $napis = "napis";
    $tekst = <<<'PC'
        Tutaj rozpoczyna się $napis. 
        Ten napis powstał z wykorzystaniem
        składni heredoc.
    PC;
    echo $tekst;
?>
