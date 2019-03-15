<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List Of Accounts</title>
    
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.7.4/css/bulma.css" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
</head>
<body>
<div class="container">
<div class="section">
        <div class="row">
        <form action="register.php" method="POST">
            <div class="col">
                <h1 class="title has-text-centered">User Registration</h1>
                <div class="form">
                <div class="field">
                    <label for="username" class="label" >NAME</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="username" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="fathername" class="label" >FATHER</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="fathername" required>
                        <span class="icon is-small is-left"><i class="fas fa-user-tie"></i></span>
                    </p>
                </div>

                <div class="field">
                    <label for="email" class="label" >EMAIL</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="email" required>
                        <span class="icon is-small is-left"><i class="fas fa-envelope"></i></span>
                    </p>
                </div>


                <div class="field">
                    <label for="phone" class="label">PHONE</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="phone" required>
                        <span class="icon is-small is-left"><i class="fas fa-phone"></i></span>
                    </p>
                </div>


                <div class="field">
                    <label for="address" class="label" >ADDRESS</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="address" required>
                        <span class="icon is-small is-left"><i class="fas fa-address-card"></i></span>
                    </p>
                </div> 
                

                <div class="field">
                    <label for="city" class="label" >CITY</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="city">
                        <span class="icon is-small is-left"><i class="fas fa-city"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="state" class="label" >STATE</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="state" required>
                        <span class="icon is-small is-left"><i class="fas fa-city"></i></span>
                    </p>
                </div>
                <div class="field">
                    <label for="pin" class="label" >PIN</label>
                    <p class="control has-icons-left">
                        <input type="text" class="input has-icons-left" name="pin">
                        <span class="icon is-small is-left"><i class="fas fa-map-pin"></i></span>
                    </p>
                </div>
                    <div class="level-right">
                        <div class="level-item">
                        <input type="reset" class="button is-success" value="Clear">
                        </div>
                        <div class="level-item">
                        <input type="submit" class="button is-success" value="Register">
                        </div>
                    
                    </div>
            </div>
        </div>
        </form>
</div>

</div>



</body>
</html>