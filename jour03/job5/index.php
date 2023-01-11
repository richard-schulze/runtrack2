<?php
$str = "On n'est pas le meilleur quand on le croit mais quand on le sait";
$dic = [
    "consonnes" => "BbCcDdFfGgHhJjKkLlMmNnPpQqRrSsTtVvXxZz",
    "voyelles" => "AaEeIiOoUuYy"
];
$voyelle = 0;
$consonne = 0;

for ($a = 0; isset($str[$a]); $a++) {

    for ($i = 0; isset($dic["voyelles"][$i]); $i++) {

        if ($str[$a] == $dic["voyelles"][$i]) {

            $voyelle++;

        }
    }
    for ($i = 0; isset($dic["consonnes"][$i]); $i++) {

        if ($str[$a] == $dic["consonnes"][$i]) {
            
            $consonne++;
        }
    }
}
echo " <table border=1>
        <tr>
            <th>consonnes</th>
            <th>voyelles</th>
        </tr>
        <tr>
            <td>$consonne</td>
            <td>$voyelle</td>
        </tr>
        </table>";
?>