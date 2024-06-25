<?php
require_once 'orm/ActiveRecord.php';

 ActiveRecord\Config::initialize(function($cfg)
 {
     $cfg->set_model_directory($_SERVER["DOCUMENT_ROOT"]."waysy/models");
     $cfg->set_connections(array(
        'development' => 'mysql://root:root@localhost/financial_management'));
 });
