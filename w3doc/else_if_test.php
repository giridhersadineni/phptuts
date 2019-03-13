
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>If Else Demo</title>
</head>
<body>
    
    <form action="else_if_test.php" method="POST">
    <label for="a">Enter Number 1</label>
    <input type="number" name="a">
    <label for="b">Enter Number 2</label>
    <input type="number" name="b" >
    <label for="c">Enter Number3</label>
    <input type="number" name="c">
    <input type="submit" value="submit" name="submit">    
   
    </form>
    <?php
    if(isset($_POST['submit'])){
    $a=(int)$_POST['a'];
    $b=(int)$_POST['b'];
    $c=(int)$_POST['c'];
    if($a>$b && $a>$c){
        echo "a is the bigger than the b and c";
    }elseif($b>$c){
        echo "b is the bigger than the c";
    } else {
        echo "c is the bigger";
    }

    ?>


</body>
</html>


