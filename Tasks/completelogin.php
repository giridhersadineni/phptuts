<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
        <link rel="stylesheet" href=" https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css">   
</head>
<body>
<div class="container">
    <div class="columns">
        <div class="column">
            <h1 class="title">Login</h1>
            <form action="completelogin.php" method="POST">
                <input type="text" class="input" placeholder="Enter Username" name="username" required>
                <input type="password" class="input" placeholder="Enter Password" name="password" required>
                <input type="submit" class="button" name="submit" value="Login">
                
                <?php
                    

                ?>
                <?php
                    if(isset($_POST['submit'])){
                        $usersdata=array(
                            "giridher"=>"sadineni",
                            "suresh"=>"annika",
                            "bhavani"=>"vemula",
                            "deepthi"=>"dhaaram",
                            "swathi"=>"ankam",
                            "shravani"=>"seelam"
                        );
                        $authorized=0;
                        $usernames=array_keys($usersdata);
                        $username_sub=$_POST['username'];
                        $password_sub=$_POST['password'];
                        //usernames are stored as keys

                        $userfound=in_array($_POST['username'],$usernames);
                        if($userfound){
                            if($password_sub==$usersdata[$username_sub]){
                                $authorized=1;
                            }
                        }
                        if($authorized){
                            echo "<h3 >Login Successfull: Welcome ".$usersdata[$username_sub]. " ".array_search($usersdata[$username_sub],$usersdata).'<h3>';
                        }
                        else{
                            echo "Login Failed : User Not Found";
                        }

                    }
                ?>
                
                
            </form>
        </div>
    </div>

</div>
</body>
</html>