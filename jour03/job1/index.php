<?php
$numbers = ['200', '204', '173', '98', '171', '404', '459']; 

foreach ($numbers as $key => $numbers){
    if ($numbers % 2 == 0) {
      echo $numbers. ' est un nombre pair<br>';
    }
    else{
      echo $numbers.  ' est un nombre impair<br>';
    }
  
}

?>