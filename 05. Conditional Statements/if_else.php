
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Else Demo</title>
</head>
<body>
    
    <form action="if_else.php" method="POST">
    <label for="a">Enter Number 1</label>
    <input type="number" name="a">
    <label for="b">Enter Number 2</label>
    <input type="number" name="b" >
    <input type="submit" value="submit" name="submit">    
   
    </form>
    <?php
    if(isset($_POST['submit'])){
    $a=(int)$_POST['a'];
    $b=(int)$_POST['b'];
    if($a>$b){
     echo "The difference between two numbers is".($a-$b);
    }
    else{
     echo "The difference between two numbers is".($b-$a);
    }
    }
    ?>


</body>
</html>


