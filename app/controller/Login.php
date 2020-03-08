<?php

class Login extends Controller {
    public function __construct($controller, $action){
        parent::__construct($controller,$action);
    }
    
    public function indexAction(){
        $this->view->render('login/index');
    }

    public function getLoginCredAction(){
        if(isset($_POST['uname'])){
            $uname = $_POST['uname'];
            $pwd = $_POST['pwd'];
            $unameVerified=LoginQuery::authResult($uname,$pwd);
            if ($uname == $unameVerified){
                echo "success";
            }
        }
        exit();
    }

}