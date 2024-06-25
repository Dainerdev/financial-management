<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "waysy/libs/config.php";

class Category extends ActiveRecord\Model {
    
    public static $has_many = array(
        array('budgets'),
        array('transactions'),
        array('goals')
    );
}