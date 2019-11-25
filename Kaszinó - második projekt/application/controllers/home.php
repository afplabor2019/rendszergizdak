<?php

class Home extends Controller {

    public $model;

    function __construct() {
        $this->model = $this->load_model('home_model');
    }

    public function index() {
        $this->load_view('home/index');
    }

    public function login() {
        $id = $this->model->verify_user($_POST['name'], $_POST['password']);

        if (!empty ($id))
            $_SESSION['id'] = $id;
            
        header("Location: ".URL);
    }

    public function logout() {
        session_unset();
        header("Location: ".URL);
    }
}