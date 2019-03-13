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