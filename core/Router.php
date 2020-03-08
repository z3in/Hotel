<?php

class Router{

    public static function route($url){        
        
        $controller = (isset($url[0]) && $url[0] != '') ? ucwords($url[0]) : DEFAULT_CONTROLLER;
        $controller_name = $controller;
        array_shift($url);

        $action = (isset($url[0]) && $url[0] != '') ? $url[0] . 'Action': 'indexAction';
        $action_name = $action;
        array_shift($url); 

        //params
        $queryParams = $url;
        if(!class_exists($controller_name)){
            $dispatch = new Login('Login', 'indexAction');
            if(method_exists($controller, $action)){
                call_user_func_array([$dispatch, $action], $queryParams);
            }else{
                call_user_func_array([$dispatch, 'indexAction'], $queryParams);
            }
        }else{
            $dispatch = new $controller($controller_name, $action_name);
            call_user_func_array([$dispatch, $action], $queryParams);
        }
        
 
    }

}