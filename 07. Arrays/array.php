<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array </title>
</head>
<body>

     <?php

        $nums=array(1,2,3,4,5,6,7,8);
        echo $nums[3];
        
        for($index=0;$index<10;$index++){
            echo "<br>The number ".$nums[$index]."Is stored at index : ".$index;
        }
        //

        echo "<br> Printing with For each<br>";
        foreach($nums as $num){
            echo $num.'<br>';
        }


     ?>
</body>
</html>