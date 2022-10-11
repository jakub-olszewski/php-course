<?php

    /**
     */

   $tab = array(3,2,4,7,0,2,4);

   echo "Zawartość tablicy przed sortowaniem:<br>";

   foreach($tab as $x){
      echo "$x ";
   }

   sort($tab);

   echo "Zawartość tablicy po sortowaniu:<br>";
   
   foreach($tab as $x){
      echo "$x ";
   }
     
?>

