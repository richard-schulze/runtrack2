<!DOCTYPE html>
    <html>
    <head>
    </head>
    <body>
    
    <?php
    $mysqli = new mysqli("localhost", "root", "", "jour09");
    
    $request = $mysqli->query("SELECT * FROM salles ORDER BY capacite;");
    
    $results = $request -> fetch_array(MYSQLI_ASSOC);
    
    
    echo "<table border='1'><tr>";
    
    
    foreach ($results as $key => $value)
    {
       echo " <th> " . $key . " </th> ";
    }
    echo "</tr>";
    while ($results != NULL)
    {
       echo "<tr>";
       foreach ($results as $value)
       {
             echo "<td>" . $value . "</td>";
       }
       echo "</tr>";
       $results = $request -> fetch_array(MYSQLI_ASSOC);
    }
    echo "</table>";
    ?>
    </body>
    </html>