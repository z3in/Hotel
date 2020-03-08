<?php

class Home extends Controller {

    protected $id;

    public function __construct($controller, $action){
        parent::__construct($controller,$action);
    }
    
    public function homeAction($uname=''){
        if($uname==''){
            $this->view->render('Login/index');
        }else{
            $_SESSION['uname'] = $uname;
            $this->view->render('home/home');
        }

    }

    public function setID($id){
        $this->id = $id;
    }

    public function indexAction(){
        $this->view->render('home/home');
    }

}