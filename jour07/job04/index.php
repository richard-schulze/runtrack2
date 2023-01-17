<?php

function calcule($a, $operation, $b)
{
      $result = 0;
      switch ($operation)
      {
            case '+':
                  $result = $a + $b;
                  break;
            case '-':
                  $result = $a - $b;
                  break;
            case '/':
                  $result = $a / $b;
                  break;
            case '*':
                  $result = $a * $b;
                  break;
            case '%':
                  $result = $a % $b; 
                  break;

            default:
                  echo "";
      }

      return $result;
}

echo calcule(20,'+',5) . "<br/>";
echo calcule(20,'-',5) . "<br/>";
echo calcule(20,'/',5) . "<br/>";
echo calcule(20,'*',5) . "<br/>";
echo calcule(19, '%', 5) . "<br>";

?>