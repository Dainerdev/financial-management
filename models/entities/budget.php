<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "financial_management/libs/config.php";

class Budget extends ActiveRecord\Model {
 
    public static $belongs_to = array(
        array('category')
    );
}