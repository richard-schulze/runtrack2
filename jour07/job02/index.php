<?php 
function bonjour($jour){
    if ($jour) {
        echo "Bonjour<br>";
    }else{
        echo "Bonsoir<br>";
    }
}
bonjour(true);
bonjour(false);
?>