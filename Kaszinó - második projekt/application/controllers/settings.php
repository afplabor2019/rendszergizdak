<?php

class Settings extends Controller {
    public $model;

    function __construct() {
        $this->model = $this->load_model('settings_model');
    }

    public function index() {
        $this->load_view('settings/index');
    }
    /*
    public function update(){
        $id = $this->model->get_user('id');
        if($id != NULL)
            update_user_data();
    }*/
}