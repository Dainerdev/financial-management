<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "waysy/libs/config.php";

class Budget extends ActiveRecord\Model {
 
    public static $belongs_to = array(
        array('category')
    );
}