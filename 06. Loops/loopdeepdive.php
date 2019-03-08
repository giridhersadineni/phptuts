<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Loop Internal Implementation Demo</title>
</head>
<body>
        <?php
        /*
        while($count=1){
           echo $count. "Good Morning<br>";
           $count++;
                if($count==100){
                    break;
                }   

        }
        */
        ?>

        <?php
        /*
        $count=100;
        while($count--){
           echo $count. "Good Morning<br>";
           if($count==1){
               $count=-1;
           }
        }
        */
        ?>      

        <?php
        $count=2;
        while($count++){
            if($count%2!=0){
                continue;
            }
            echo $count ."<br>";
        }
        ?>


</body>
</html>