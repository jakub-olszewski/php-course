<?php

/**
 * Podany kod wyświetli informację na temat wartości identyfikatora. 
 * Przy pierwszych odwiedzinach strony PHP wygeneruje dla użytkownika 
 * nowy identyfikator. Przy kolejnych odwiedzinach przydzieli mu 
 * ten sam identyfikator, a sesja zostanie wznowiona.
 */

session_start();
echo "<p>Identyfikator sesji to: ".session_id (). "</p>";

?>