<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "financial_management/libs/config.php";

class Category extends ActiveRecord\Model {
    
    public static $has_many = array(
        array('budgets'),
        array('transactions'),
        array('goals')
    );
}