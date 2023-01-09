<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>job03</title>
</head>
<style>
    table,
td {
    border: 1px solid #333;
}

thead{
    background-color: #333;
    color: #fff;
}
</style>
<body>
    <?php
    $bool = true;
    $val = 2;
    $decimal = 1.5;
    $nom = "richard";

    ?>
<table>
    <thead>
        <tr>
            <th colspan="1">Type</th>
            <th colspan="1">Nom</th>
            <th colspan="1">Valeur</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>Boolean</td>
            <td>$bool</td>
            <td><?=$bool?></td>
        </tr>
        <tr>
            <td>Entier</td>
            <td>$val</td>
            <td><?=$val?></td>
        </tr>
        <tr>
            <td>Float</td>
            <td>$decimal</td>
            <td><?=$decimal?></td>
        </tr>
        <tr>
            <td>String</td>
            <td>$nom</td>
            <td><?=$nom?></td>
        </tr>
    </tbody>
</table>
</body>

</html>