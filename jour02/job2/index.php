<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 1338; $i++) {
        if ($i == 26) {
            echo "";
        } elseif ($i == 37){
            echo ""; 
        }elseif ($i == 88){
            echo ""; 
        }elseif ($i == 1111){
            echo ""; 
        }else{
            echo ($i);
            echo '<br>';
        }
        
    }

    ?>
</body>
</html>