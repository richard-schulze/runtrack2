<?php
    $str = "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
    $b = 0;
    while (isset($str[$b]) == true) {
        if ($b %2 == 0){

        echo $str[$b];
        }
    
    $b++;
    }

?> 

