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
            <form action="Samplelogin.php" method="POST">
                <input type="text" class="input" placeholder="Enter Username" name="username" required>
                <input type="password" class="input" placeholder="Enter Password" name="password" required>
                <input type="submit" class="button" name="submit" value="Login">
                
                <?php
                    if(isset($_POST['submit'])){
                        $users=array("giridher","suresh","bhavani","deepthi","swathi","shravani");
                        $username="admin";
                        $password="admin";  
                        if($_POST['username']==$username and $_POST['password']==$password){
                            echo "<h3 >Login Successfull: Welcome ".$_POST['username'].'<h3>';
                        }
                        else{
                            echo "Login Failed";
                        }



                    }
                ?>
                
                
            </form>
        </div>
    </div>

</div>
</body>
</html>