<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include 'components/link_bootstrap.php';?>
    <title>Sign Up - WaySy</title>
</head>
<body>
    <center>
        <form action="action">
            <h2>Sign Up - WaySy</h2>
            <div class="line"></div>

            <label for="id">Id:</label>
            <input type="text" name="id" id="id" required>

            <label for="type">Type id:</label>
            <select name="type" id="type" required>
                <option value="default">Select</option>
                <option value="1">Cédula</option>
                <option value="2">Tarjeta de identidad</option>
            </select>

            <label for="namea">First name:</label>
            <input type="text" name="namea" id="namea" required>

            <label for="nameb">Second name:</label>
            <input type="text" name="nameb" id="nameb" placeholder="(Optional)">

            <label for="lname">Last name:</label>
            <input type="text" name="lname" id="lname" required>

            <label for="email">E-mail:</label>
            <input type="email" name="email" id="email" required>

            <label for="pass">Password:</label>
            <input type="password" name="pass" id="pass" required>

            <label for="age">Date of birth:</label>
            <input type="date" name="age" id="age" required>

            <span>Have an account? <a href="../view/login.php">Log in now</a></span>

            <div class="buttons-sigin">
                <button type="submit">Log In</button>
                <a href="../view/login.php">Cancel</a> 
            </div>            
        </form>
    </center>

    <?php include 'components/script_bootstrap.php';?>
</body>
</html>