<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/link_bootstrap.php';?>
    <title>Log In - WaySy</title>
</head>
<body>
    <center>
        <form action="action">
            <h2>LOG IN - WaySy</h2>
            <div class="line"></div>
            <label for="email">E-Mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" required>

            <span>Don't have an account? <a href="../view/signin.php">Sign up now</a></span>

            <div class="buttons-login">
                <button type="submit">Log In</button>
                <button type="reset">Clean</button>
            </div>            
        </form>
    </center>

    <?php include 'components/script_bootstrap.php';?>
</body>
</html>