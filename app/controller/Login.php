<?php

class Login extends Controller {
    public function __construct($controller, $action){
        parent::__construct($controller,$action);
    }
    
    public function indexAction(){
        $this->view->render('login/index');
    }

    public function homeAction(){
        $this->view->render('login/hone');
    }
}