<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "Financial_management/libs/config.php";

class User extends ActiveRecord\Model {
    
    public static $has_many = array (
        array('goals'),
        array('categories')
    );
}