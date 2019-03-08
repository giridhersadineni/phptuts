<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>While Loop</title>
</head>
<body>
<?php

    $count=0; //initialization

    while($count<=100){
        echo '<br>'.$count;
        $count++;// $count = $count +1;
    }


?>

<h2>Print in Reverse</h2>
<?php

    $count=100; //initialization
    while($count>0){
        echo '<br>'.$count;
        $count--;// $count = $count +1;
    }


?>


<h2>Even Numbers</h2>
<?php

    $count=0; //initialization
    while($count<=100){
       
        $count=$count+2;// $count = $count +1;
        echo '<br>'.$count;
    }


?> 



<

</body>
</html>