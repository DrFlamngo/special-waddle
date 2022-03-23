<?php 
session_start();
$encode = $_SESSION['encode'];
?>
<!DOCTYPE html>
<html>

<head>
    <title>Matches</title>
</head>

<body>
    <h2>Matches!</h2>
    <ul>
        <?php
         foreach($encode as $code){
            $matchnames = $code['name'];
            echo "<li> $matchnames </li>";
          }
        
        ?>
    </ul>
</body>

</html>