<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "waysy/libs/config.php";

class User extends ActiveRecord\Model {
    
    public static $has_many = array (
        array('goals'),
        array('categories')
    );
}