<?php

function occurences($str, $char)
{
      $i = 0;
      $j = 0;
      while (isset($str[$i]))
      {
            if ($str[$i]==$char) 
            {
                  $j++;
            }
            $i++;
      }
      return $j;
}

echo occurences('Bonjour','o');


?>