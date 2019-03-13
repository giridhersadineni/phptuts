<?php
print_r($_POST);
include "includes/config.php";
$conn = new mysqli($servername,$dbuser,$dbpwd);
if($conn->connect_error){
    die("Connection Error".$conn->connect_error);
}
else{
    $firstname=$_POST['username'];
    $lastname=$_POST['lastname'];
    $username=$_POST['username'];
    $password=$_POST['password'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $sql= "INSERT INTO USERS(FIRSTNAME,LASTNAME,USERNAME,PASSWORD,EMAIL,PHONE) VALUES( '".$firstname."','".$lastname."','".$username."','".$password."','".$email."','".$phone."');";
    echo $sql;

}
?>