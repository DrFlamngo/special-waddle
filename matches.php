<?php 
session_start();
$encode = $_SESSION['encode'];
?>
<!DOCTYPE html>
<html>

<head>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="styles.css">

    <script type="text/javascript" src="http://code.jquery.com/jquery-latest.js"></script>
    <script src="javascript.js"></script>
    
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
</body>

</html>