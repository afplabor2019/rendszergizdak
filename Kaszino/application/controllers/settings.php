<?php

class Settings extends Controller {
    public $model;

    function __construct() {
        $this->model = $this->load_model('settings_model');
    }

    public function index() {
        $this->load_view('/settings/index');
    }

    public function update_user(){

        $user= $this->model->get_user($_SESSION['id']);
        $result= $this->model->getRecord("SELECT * FROM `users` WHERE `name` = '".$_POST['newName']."'");

        if($user['name'] != $_POST['name']){
            $_SESSION['message'] = 'Hiba: A megadott felhasználó név nem egyezik meg a felhasználó jelenlegi nevével';
           
        }

        if($user['password'] != $_POST['password']){
            $_SESSION['message'] = 'Hiba: A megadott jelszó  nem egyezik a felhasználó jelenlegi jelszavával';
            
        }

        if (!empty($result) && $_POST['newName'] != $user['name']) {
            $_SESSION['message'] = 'Hiba: A felhasználónév már létezik';
        }

        if($_POST['newName'] == $user['name'] && $_POST['newPassword'] == $user['password'])
        {
            
            $_SESSION['message'] = 'Hiba: A felhasználó adatai megegyeznek a régivel';
        }

        if(empty($_SESSION['message'])) {
            $this->model->update_user_data($_SESSION['id'],$_POST['newName'], $_POST['newPassword']);
            $_SESSION['message'] = 'Sikeres update!';

        }
        header("Location: ".URL."/settings");
    }

    public function loadup_balance(){
        $user= $this->model->get_user($_SESSION['id']);
        $newBalance = $user['balance'] + $_POST['increaseBalance'];
        
        $this->model->update_balance($_SESSION['id'],$newBalance);

        header("Location: ".URL."/settings");
    }
}