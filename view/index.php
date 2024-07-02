<?php
    $msj = @$_REQUEST["msj"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">    
    <link href="css/login.css" rel="stylesheet">
    <link href="css/general.css" rel="stylesheet">
    <title>Log In - WaySy</title>
</head>
<body>
    <center>
        <div class="container-form">        
            <form action="../controllers/UserController.php" class="form" method="post">
                <div>
                    <h1>LOG IN</h2>
                    <div class="line"></div>
                    
                    <div class="inputs">
                        <label for="email">E-Mail:</label>
                        <input type="email" name="email" id="email" required placeholder="ex@mple.com">

                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass" required>
                    </div>

                    <div class="span">
                        <span>Don't have an account? <a href="../view/forms/users/signin.php">Sign up now</a></span>
                    </div>

                    <div class="buttons-login">
                        <input type="submit" name="action" id="action" value="Log In">
                        <input type="reset" value="Clean" id="clean">
                    </div> 
                </div> 
                <div class="line"></div>          
                <div class="alert">
                    <span><?= ($msj != NULL || isset($msj)) ? $msj : "" ?></span>
                </div>
                <div class="brand">
                    <span>
                        <h2>WaySy</h2>
                    </span>
                </div>
            </form>        
        </div>
    </center>
</body>
</html>