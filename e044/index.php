<?php

    /**
     * in_array(search, array, type)
     * 
     * search	Required. Specifies the what to search for
     * array	Required. Specifies the array to search
     * type	   Optional. If this parameter is set to TRUE, 
     *         the in_array() function searches for the 
     *         search-string and specific type in the array.
     */

   $tab = array("3",2,4,7,"0",2,4);

   $szukamy = 3;

   if (in_array($szukamy, $tab))
   {
      echo "Znaleziono ", $szukamy , "<br>";
   }
   else
   {
      echo "Nie znaleziono " . $szukamy . "<br>";
   } 

   szukaj("2",$tab);
     
   function szukaj($szukamy,$tablica){
      if (in_array($szukamy, $tablica, TRUE))
      {
         echo "Znaleziono " . $szukamy . "<br>";
      }
      else
      {
         echo "Nie znaleziono " . $szukamy . "<br>";
      } 
   }
?>

