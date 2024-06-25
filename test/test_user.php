<?php
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/User.php';
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/Goal.php';
require_once $_SERVER["DOCUMENT_ROOT"] . 'waysy/models/entities/Category.php';



$u = new User();
$u->id_user = '7502215054';
$u->type_id = 1;
$u->name_a = 'Ivan';
$u->name_b = '';
$u->last_name = 'Alcantara Martínez';
$u->email = 'asdadad@gmail.com';
$u->password = 'asdhaksjd';
$u->age = '2005-06-10';
$u->registration_date = '2024-06-24';

try {
    $u->save();
    $total = User::count();
    echo "Usuario guardado correctamente.<br>";
    echo "Hay un total de $total usuarios almacenados.";

} catch (Exception $error) {
    $msj = $error->getMessage();
    if (strstr($msj, "Duplicate") !== false) {
        echo "El usuario ya existe";
        $total = User::count();
        echo "Hay un total de $total usuarios almacenados.";

    }else {
        echo "Se ha producido un error al intentar guardar el usuario." . $msj;
    }
}

