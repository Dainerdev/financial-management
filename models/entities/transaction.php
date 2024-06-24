<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "Financial_management/libs/config.php";

class Transaction extends ActiveRecord\Model {
    
    public static $belongs_to = array(
        array('category')
    );
}