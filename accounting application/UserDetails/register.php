<?php
//print_r($_POST);
include "includes/config.php";
$conn = new mysqli($servername,$dbuser,$dbpwd,$dbname);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $username=$_POST['username'];
    $fathername=$_POST['fathername'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];
    $city=$_POST['city'];
    $state=$_POST['state'];
    $pin=$_POST['pin'];

    $sql="INSERT INTO USERS(`NAME`,`FATHER`,`EMAIL`,`PHONE`,`ADDRESS`,`CITY`,`STATE`,`PIN`) VALUES('".$username."','".$fathername."','".$email."','".$phone."','".$address."','".$city."','".$state."','".$pin."')";
    

    //echo $sql;

    if($conn->query($sql)===TRUE){
        echo "Successfully registered";
    }
    else{
        echo "Error";
        echo $conn->error;
    }
}