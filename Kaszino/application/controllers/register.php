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
        $db = $db = mysqli_connect('localhost', 'root', '', 'kaszino');
        $query = "SELECT * FROM `users` WHERE `name` = '".$_POST['name']."'";
        $result= mysqli_query($db,$query);

        if(mysqli_num_rows($result)){
            //TO DO: hiba kiírás
            header("Location: ".URL."/register");
        } 
        else if($_POST['password'] == $_POST['confirmPassword']) {
            $this->model->insert_user($_POST['name'],$_POST['password']);
            header("Location: ".URL."/home");
        }

       
                       
    }
}