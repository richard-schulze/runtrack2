
<html>
<body>
<form action="" method="get" class="formulaire">
      <label for="nom">Nom : </label>
      <input type="text" name="nom" placeholder="Entrez votre nom" id="nom">

      <label for="prenom">Prenom : </label>
      <input type="text" name="prenom" placeholder="Entrez votre prénom" id="prenom">

      <input type="submit" value="Envoyer">
</form>
</body>
</html>

<?php
$i = 0;
foreach ($_GET as $key => $value) {
      if ($value != "")
      {
            $i++;
      }
}
echo "Le nombre d'argument GET envoyé est : " . $i;

?>
