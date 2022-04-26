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
        //takes the encode from session and loops through the array printing the name in the array
         foreach($encode as $code){
            $matchnames = $code['name'];
            echo "<li> $matchnames </li>";
          }
        
        ?>
    </ul>
    <a href="index.html">Return to Homepage</a>
</body>

</html>