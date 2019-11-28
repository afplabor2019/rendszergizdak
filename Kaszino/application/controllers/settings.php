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
        if (($user['name'] == $_POST['name']) && ( $user['password'] == $_POST['password']))
            $this->model->update_user_data($_SESSION['id'],$_POST['newName'], $_POST['newPassword']);
       
        header("Location: ".URL."/settings");
    }

    public function loadup_balance(){
        $user= $this->model->get_user($_SESSION['id']);
        $newBalance = $user['balance'] + $_POST['increaseBalance'];
        
        $this->model->update_balance($_SESSION['id'],$newBalance);

        header("Location: ".URL."/settings");
    }
}