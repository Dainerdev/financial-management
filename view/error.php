<?php
    $msj = @$_REQUEST["msj"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Error - WaySy</title>
</head>
<body>
    <center>
        <h1>Message</h1>
        <hr>
        <!-- Mostrar el msj enviado por el controlador -->
        <span style="color: #900D40; background-color: #FAD7CE; padding: 5px; border-radius: 4px;">
            <?= ($msj != NULL || isset($msj)) ? $msj : "" ?>
        </span>
    </center>
</body>
</html>