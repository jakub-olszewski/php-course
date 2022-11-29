<?php

/**
 * Gdy czas ważności nie był określony, to plik zostanie usunięty przy zamykaniu przeglądarki. 
 * Aby usunąć samodzielnie plik cookie, można ustawić dla niego czas ważności, który już upłynął,
 *  albo ustawić jako wartość ciąg pusty lub wartość false. 
 * Pozostałe argumenty funkcji powinny być takie same jak argumenty tworzenia pliku.
 */

setcookie("pismo", "Na skróty", time ()-100, "/", "localhost ", 0);
?>