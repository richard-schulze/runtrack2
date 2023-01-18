<?php

// if (!isset($_COOKIE['nbvisites']) || isset($_POST['button']))
// {
//       setcookie('nbvisites', '1', time()+3600);
//       header('Location: .');
//       echo $_COOKIE['nbvisites'];


// }
// else if (isset($_COOKIE['nbvisites']) && !isset($_POST['button']))
// {
//       $visits = (int)$_COOKIE['nbvisites'];
//       $visits++;
//       setcookie('nbvisites', (string)$visits, time()+3600);
//       echo $_COOKIE['nbvisites'];
// }
if (!isset($_COOKIE["nbvisites"])){
      $_COOKIE['nbvisites'] = 1;
      setcookie("nbvisites", 1, time() + 36000);
      echo $_COOKIE["nbvisites"];
}else {
      $_COOKIE["nbvisites"]++;
      setcookie("nbvisites", $_COOKIE["nbvisites"], time() + 36000);
      echo $_COOKIE["nbvisites"];
}


if (isset($_POST["reset"]))
{
      setcookie("nbvisites", "", time() - 36000);
      unset($_POST["reset"]);
      header("location:index.php");  
}
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
<form action="" method="POST" class="formulaire">
      <input name="reset" type="submit" value="Reset">
</form>


</body>
</html>
