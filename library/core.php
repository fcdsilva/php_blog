<?php

require('../config.php');
require('core.class.php');


//
if(defined('ENVIRONMENT')){
    switch(ENVIRONMENT){
        case 'development':
            error_reporting(E_ALL);

            // Database
            define('DB_SERVER', 'fabiosilva.it');
            define('DB_USER', 'developer');
            define('DB_PASS', 'developer');
            define('DB_NAME', 'dblog');

            break;

        case 'testing':
            error_reporting(0);

            // Database
            define('DB_SERVER', '');
            define('DB_USER', '');
            define('DB_PASS', '');
            define('DB_NAME', '');

        case 'production':
            error_reporting(0);

            // Database
            define('DB_SERVER', '');
            define('DB_USER', '');
            define('DB_PASS', '');
            define('DB_NAME', '');
            break;

        default:
            exit('The application environment is not set correctly.');
    }
}


?>