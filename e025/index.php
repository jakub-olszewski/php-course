<?php
    /*
            foreach
    */


    $tab = array(
        1 => 'biały' ,
        2 => 'czarny' ,
        3 => 'niebieski' ,
        4 => 'zielony'      
    );

    foreach( $tab as $x){
        echo "$x <br>";
    };

    $age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

    foreach($age as $x => $x_value) {
      echo "Key=" . $x . ", Value=" . $x_value;
      echo "<br>";
    }
    
?>