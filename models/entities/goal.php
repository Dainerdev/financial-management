<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "waysy/libs/config.php";

class Goal extends ActiveRecord\Model {
    
    public static $belongs_to = array(
        array('category'),
        array('user')
    );
}