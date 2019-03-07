<?php ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
        html,body{
            display: flex;
            justify-content: center;
            font-family: Arial, Helvetica, sans-serif;
            font-size: 15px;
        }
        form{
            border: 5px solid #f1f1f1;
        }
        input[type=text],input[type=password]{
            width: 100%;
            padding: 18px 15px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        h1{
            text-align: center;
            font-size: 18;
        }
        button{
            background-color: #8ebf42;
            padding: 14px 0;
            margin: 10px 0;
            width: 100%;
            border: none;
            cursor: grabbing;
        }
        button:hover{
            opacity: 0.8;
        }
        .formcontainer{
            text-align: left;
            margin: 24px 50px 12px;
        }
        .container{
            text-align: left;
            padding: 14px 0;
        }
        span.pwd{
            float: right;
            padding-top: 0;padding-right: 15px;
        }
         /* Change styles for span on extra small screens */
      @media screen and (max-width: 300px) {
         span.pwd {
         display: block;
        float: none;
        }
      }
    </style>
  </head>
  <body>
    <form action="">
        <h1>Login Form</h1>
        <div class="formcontainer">
        <hr>
            <div class="container">
                <label for="uname"><strong>Username</strong></label>
                <input type="text" name="uname" placeholder="Enter Username" required/>
                <label for="pwd"><strong>Password</strong></label>
                <input type="text" name="pwd" placeholder="Enter Password" required/>
                <button type="submit">Login</button>
                <div class="container" style="background-color: #eee">
                <label style="padding-left:15px">
                    <input type="checkbox" checked="checked" name="rememberme"/>Remember Me
                </label>
                <span class="pwd"><a href="#">Forgot Password</a></span>
            </div>
        </div>
        </div>
    </form>
  </body>
</html>