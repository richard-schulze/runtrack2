<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post" class="formulaire_inscription">
        <label for="nom">Nom :</label>
        <input type="text" name="nom" placeholder="Quel est votre nom ?" id="nom">

        <label for="prenom">Prénom :</label>
        <input type="text" name="prenom" placeholder="Quel est votre prénom ?" id="prenom">

        <label for="age">Age :</label>
        <input type="text" name="age" placeholder="Quel est votre âge ?" id="age">
        
        <input type="submit" value="Envoyer">
    </form>
    <br>

</body>
</html>

    <?php
    $i = 0;
    foreach ($_POST as $key => $value) {
        if ($value != ""){
            $i++;
        }
    }
    echo "Le nombre d'arguments POST envoyé est : " . $i;
    
    ?>

