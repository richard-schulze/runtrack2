<?php
    if (($_GET["style"]) == "style1"){ ?>
    <link rel="stylesheet" href="style1.css">
    <?php
    }
    if (($_GET["style"]) == "style2"){ ?>
    <link rel="stylesheet" href="style2.css">
    <?php
    }
    if (($_GET["style"]) == "style3"){ ?>
    <link rel="stylesheet" href="style3.css">
    <?php
    }
    
?>


<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Style</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Changa:wght@200&display=swap" rel="stylesheet">
</head>
<header><h1>Formulaire styles</h1></header>
<body>
<form  action="" method="get"> 
    <select name="style">
    <option>style1 </option>
    <option>style2 </option>
    <option>style3 </option>
    </select>
    <div style="text-align:center;">
    <p>Nom : <input type="text" name="nom" placeholder="entrez votre nom" /></p>
    <p>Prenom: <input type="text" name="nom" placeholder="entrez votre prénom" /></p>
    <p>Age: <input type="text" name="age" placeholder="Quel est votre âge ?" /></p>
    <p>Adresse : <input type="text" name="adresse" placeholder="entrez votre adresse" /></p>
    <p><input type="submit" value="soumettre"></p>
    </div>    
    </form>


</body>
<footer><h2 style="text-align:center;">Choisissez votre style !!!</h2></footer>
</html>