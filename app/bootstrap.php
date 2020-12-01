<?php
    // load config
    require_once 'config/config.php';
    
    //Helpers
    require_once 'helpers/url_helper.php';

    //Load libraries
    // Autoload Core Libraries
    spl_autoload_register(function($className){
        require_once 'libraries/'. $className .'.php';
    });
