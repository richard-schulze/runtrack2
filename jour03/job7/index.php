<?php 

$str="Certaines choses changent, et d'autres ne changeront jamais.";
$i=0;
$b= strlen($str); //Retourne la taille de la chaîne string.

while($i<$b)
{
    if($i==$b-1)
    {
        echo$str[0];
    }
    else
    {
        echo$str[$i+1];
    }
    $i=$i+1;
}

?>