<?php

require_once(ROOT . DS . 'app' . DS . 'lib' . DS . 'config.php');
require_once(ROOT . DS . 'app'. DS . 'lib' . DS . 'help.php');


function __autoload($className){
    if(file_exists(ROOT . DS . 'core'. DS . $className . '.php')){
            require_once(ROOT . DS . 'core'. DS . $className . '.php');
    }elseif(file_exists(ROOT . DS . 'app'. DS . 'controller' . DS . $className . '.php')){
            require_once(ROOT . DS . 'app'. DS . 'controller' . DS . $className . '.php');  
    }elseif(file_exists(ROOT . DS . 'app'. DS . 'model' . DS . $className . '.php')){
        require_once(ROOT . DS . 'app'. DS . 'model' . DS . $className . '.php');  
    }
}


Router::route($url);