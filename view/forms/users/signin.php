<?php
    $msjId = @$_REQUEST["msjId"]; 
    $msjEmail = @$_REQUEST["msjE"]; 
    $msj = @$_REQUEST["msj"]; 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../../css/signin.css" rel="stylesheet">
    <link href="../../css/main.css" rel="stylesheet">
    <title>Sign Up - WaySy</title>
</head>
<body>
    <center>
        <div class="container-form">
            <form action="../../../controllers/UserController.php" class="form" method="post">
                <div>
                    <h1>Sign Up</h1>
                    <div class="line"></div>

                    <div class="inputs">
                        <label for="id">Id:</label>
                        <input type="text" name="id" id="id" required placeholder="Id number">
                        <div class="alert">
                            <span><?= ($msjId != NULL || isset($msjId)) ? $msjId : "" ?></span>
                        </div>

                        <label for="type">Type id:</label>
                        <select name="type" id="type" required>
                            <option value="default">Select</option>
                            <option value="1">Cédula</option>
                            <option value="2">Tarjeta de identidad</option>
                        </select>

                        <label for="namea">First name:</label>
                        <input type="text" name="namea" id="namea" required >

                        <label for="nameb">Second name:</label>
                        <input type="text" name="nameb" id="nameb" placeholder="(Optional)">

                        <label for="lname">Last name:</label>
                        <input type="text" name="lname" id="lname" required>

                        <label for="email">E-mail:</label>
                        <input type="email" name="email" id="email" required placeholder="ex@mple.com">
                        <div class="alert">
                            <span><?= ($msjEmail != NULL || isset($msjEmail)) ? $msjEmail : "" ?></span>
                        </div>

                        <label for="pass">Password:</label>
                        <input type="password" name="pass" id="pass" required>

                        <label for="age">Date of birth:</label>
                        <input type="date" name="age" id="age" required>
                    </div>

                    <div class="span">
                        <span>Do you have an account? <a href="../../index.php">Log in now</a></span>
                    </div>

                    <div class="buttons-signin">
                        <input type="submit" name="action" id="action" value="Sign In">
                        <a href="../../index.php"><input type="button" value="Cancel" id="cancel"></a>
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