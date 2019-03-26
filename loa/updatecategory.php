<?php print_r($_POST);
if(isset($_POST['action']))
?>
<?php
    echo "Request Received";
    include "includes/config.php";
    //$conn = mysqli_connect($servername, $dbuser, $dbpwd, $dbname);
    $conn = new mysqli($servername,$dbuser,$dbpassword,$dbname);
            if($conn->connect_error){
                die("Connection Error".$conn->connect_error);
            }
            else{
                if(isset($_POST['submit'])){
                $catname=$_POST['newcatname'];
                $description=$_POST['newdescription'];
                $id=$_POST['CATID'];
                $updatecat= "UPDATE category SET 
                        CAT_NAME ='$newcatname',
                        DESCRIPTION ='$newdescription',
                        where CAT_ID = '$id'
                        "
                        ;
                echo  $updatecat;           
                //echo $sql;
                if($conn->query($updatecat)===TRUE){
                    
                   header("Location:cattable.php");
                
                }
            }
                else{
                echo "Error" .$conn->connect_error;
                }
            }
    
?>
