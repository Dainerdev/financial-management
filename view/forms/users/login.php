<?php
    $msj = @$_REQUEST["msj"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include '../../components/link_bootstrap.php';?>
    <title>Log In - WaySy</title>
</head>
<body>
    <div class="container-form">
        <center>
            <form action="../../../controllers/UserController.php" class="form" method="post">
                <div>
                    <h2>LOG IN - WaySy</h2>
                    <div class="line"></div>
                    
                    <label for="email">E-Mail:</label>
                    <input type="email" name="email" id="email" required>

                    <label for="pass">Password:</label>
                    <input type="password" name="pass" id="pass" required>

                    <span>Don't have an account? <a href="signin.php">Sign up now</a></span>

                    <div class="buttons-login">
                        <input type="submit" name="action" id="action" value="Log In">
                        <input type="reset" value="Clean">
                    </div> 
                </div> 
                <div class="line"></div>          
                <div class="alert">
                    <span><?= ($msj != NULL || isset($msj)) ? $msj : "" ?></span>
                </div>
            </form>
        </center>
    </div>

    <?php include '../../components/script_bootstrap.php';?>
</body>
</html>