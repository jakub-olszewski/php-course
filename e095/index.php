<?php

/**
 * Data ostatnich odwiedzin na stronie
 * 
 * Wykorzystując plik cookie, 
 * można określić datę ostatnich odwiedzin strony przez użytkownika.
 * 
 * Zostanie utworzony plik cookie wizyta. 
 * Termin wygaśnięcia to 30 dni od chwili jego utworzenia 
 * (2 592 000 = 60 s * 60 min * 24 godz. * 30 dni).
 */

$mies = 2592000 + time();
setcookie("wizyta", date("F jS - g: ia"), $mies);

?>



