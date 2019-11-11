<?php

class Controller {

    function __construct() {
    }

    function load_model($model) {
        require_once 'application/models/'.$model.'.php';
        return new $model;
    }

    function load_view($view, $data = []) {
        $home_model = $this->load_model('home_model');
        
        if (isset($_SESSION['id']))
            $user = $home_model->get_user($_SESSION['id']);

        require_once 'application/views/template/header.php';
        require_once 'application/views/'.$view.'.php';
        require_once 'application/views/template/footer.php';
    }
}