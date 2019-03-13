<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Functions Demo</title>
</head>
<body>
        <?php
        include('functions.php');
        $names=array("giridher","suresh","shravani","bhavani","swathi","deepthi");
            /*
        $index=array_search("giridher",$names);
        $replacewith = array();
        $replacewith[$index]="Giridher Sadineni";
        print_r($replacewith);
        $newnames=array_replace($names,$replacewith);
        */
        
        $names=replaceName("suresh","suresh annika",$names);
        displayArray($names,"Student Name");
        

        
        ?>



</body>
</html>