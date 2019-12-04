<?php

class Register extends Controller {

    public $model;

    function __construct() {
        $this->model = $this->load_model('register_model');
    }

    public function index() {
        $this->load_view('register/index');
    }

    function register_user(){

        $result= $this->model->getRecord("SELECT * FROM `users` WHERE `name` = '".$_POST['name']."'");

        if ($_POST['password'] != $_POST['confirmPassword']) {
            $_SESSION['message'] = 'Hiba: Nem egyezik a két jelszó';

        }
        else if (!empty($result)) {
            $_SESSION['message'] = 'Hiba: A felhasználónév már létezik';
        }

        else {   
            $this->model->insert_user($_POST['name'],$_POST['password']);         
            $_SESSION['message'] = 'Sikeres reg!';
        }

        header("Location: ".URL."/register");                  
    }
}