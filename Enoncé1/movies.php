<?php

    $movieName = $_GET["movieName"];
    $movieStar = $_GET ["movieStar"];
    $movieYear = $_GET ["movieYear"];
    

 
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Avengers</title>
</head>
<body>
    <h1><strong>Information about <?php echo "$movieName"; ?>:</strong></h1>
    <p><b><?php echo"$movieName" ;?></b> starred in the movie <b><?php echo "$movieStar";?></b> which was released in year <b><?php echo "$movieYear" ;?></b></p>


</body>
</html>

