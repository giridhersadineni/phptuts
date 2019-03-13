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
        $names=array("giridher","suresh","shravani","bhavani","swathi","deepthi");
        $nums=array(1,2,3,"giridher",5,6,7,$names);
        echo $nums[3];
        
        for($index=0;$index<10;$index++){
            echo "<br>The number ".$nums[$index]."Is stored at index : ".$index;
        }
        //

        echo "<br> Printing with For each<br>";
        foreach($nums as $num){
            echo $num.'<br>';
        }
        $storednames=$nums[7];
        foreach($storednames as $name){
            echo $name;
        }

        echo '<h1>Dumped from var_dump($names)</h1>';
        var_dump($names);
        echo '<h1>Dumped from var_dump($nums)</h1>';
       
        var_dump($nums);
        $class=array(
            'teacher'=>"giridher",
            "students"=>array(
                "giridher","suresh","shravani","bhavani","swathi","deepthi"
            )
        );

        echo '<h1>Dumped from var_dump($class)</h1>';
        var_dump($class);

        echo "br";

        echo "<h2>Class Teacher:".$class["teacher"]."</h2>";
        print_r($class);
        echo "<br>";
        print_r($class["students"]);

     ?>
</body>
</html>