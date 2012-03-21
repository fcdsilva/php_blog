<?php


/** APPLICATION ENVIRONMENT **/
define('ENVIRONMENT', 'development');


/** DIRECTORIES **/ 
define('DIR_BASE', str_replace("\\", "/", dirname(__FILE__))); //Base Directory
define('DIR_LOGS', DIR_BASE.'/logs/'); // Logs
define('DIR_PUBLIC', DIR_BASE.'/public/'); // Public Directory

/** Precisa webmaster Adicionar o email do Webmaster, SysAdmin, Suporte e Admin Comercial para notifica‹o de erro cr’tico ;) **/


//
if(defined('ENVIRONMENT')){
    switch(ENVIRONMENT){
        case 'development':
            error_reporting(E_ALL);

            /*/ Database
            define('DB_SERVER', '127.0.0.1');
            define('DB_USER', 'root');
            define('DB_PASS', '');
            define('DB_NAME', 'dblog');
            */
            
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