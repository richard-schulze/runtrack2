<?php

$str = "I'm sorry Dave I'm afraid I can't do that.";

$v = array('a', 'e', 'I', 'i', 'o', 'u', 'y');

$d = 0;

while (isset ($str[$d]) == true) {
    foreach ($v as $key => $voyelle) {
        if ($str [$d] == $voyelle) {
            echo $str [$d];
        }
    }
    $d = $d+1;
}

?>