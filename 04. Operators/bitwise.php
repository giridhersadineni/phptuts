<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>BitWise Operators</title>
</head>
<body>
    <h1>Bitwise Operators</h1>

    <?php 
    $a=65;
    $b=8;

    echo '<p>'.'$a & $b =' . ($a & $b).'</p>';
    echo '<p>'.'$a | $b =' . ($a | $b).'</p>' ; 
      //  echo '˜ $a  =' . (˜ $a);

    echo '<p>'.'$a << 2 =' . ($a << 2).'</p>' ;   
    echo '<p>'.'$a >> 2 =' . ($a >> 2) .'</p>'  ; 
    
    
    
    ?>


    
</body>
</html>