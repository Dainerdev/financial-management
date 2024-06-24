<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "Financial_management/libs/orm/ActiveRecord.php";

 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."Financial_management/models");
     $cfg->set_connections(array(
        'development' => 'mysql://root:@localhost/financial_management'));
 });
