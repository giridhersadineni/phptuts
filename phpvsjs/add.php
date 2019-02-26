<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css">
    <script src="main.js"></script>
    <style>
        label,input{
            font-size: 1.5rem;
            display: block;
            clear: both;
        }
        
    </style>
</head>
<body>


<h3>Calculator</h3>
        <label for="num1">Enter a number</label>
        <input type="number" name="num1" id="num1" value='<?php echo $_POST['num1'];?>'>
        <label for="num2" >Enter another number</label>
        <input type="number" name="num2" id="num2" value='<?php echo $_POST['num2'];?>'>
        <p id="answer">
        <?php
    $res=   $_POST['num1']+$_POST['num2'];
    echo "The sum of the numbers is" . $res;?>
     </p>
    </body>
    </html>
