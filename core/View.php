<?php

class View{
    protected $_head,$_body,$_siteTitle = SITE_TITLE, $outputBuffer, $_layout = DEFAULT_LAYOUT;

    public function __construct(){

    }

    public function render($viewName){
        $viewAry = explode('/', $viewName);
        $viewString = implode(DS, $viewAry);
        if(file_exists(ROOT . DS . 'app'. DS . 'view' . DS . $viewString . '.php')){
            echo "<link rel='stylesheet' href='css/gen.css'>";
            echo "<link rel='stylesheet' href='https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css' integrity='sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh' crossorigin='anonymous'>";
            include(ROOT . DS . 'app'. DS . 'view' . DS . $viewString . '.php');            
            //include(ROOT . DS . 'app'. DS . 'view' . DS . 'layouts' . DS . $this->_layout . '.php');
        }else{
            die("does not exist");
        }
    }

    public function content($type){
        if($type == 'head'){
            return $this->_head;
        }elseif($type == 'body'){
            return $this->_body;
        }
        return false;
    }

    public function start($type){
        $this->_outputBuffer = $type;
        ob_start();
    }    
    
    public function end(){

    }
    
    public function siteTitle(){
        return $this->siteTitle;
    }

    public function setSiteTitle($title){
        $this->_siteTitle = $title;
    }

}