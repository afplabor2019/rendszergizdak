<?php

class Home extends Controller {

    public function index() {

        $home_model = $this->load_model('home_model');
        $user = $home_model->get_user(1);

        $data = array (
            'name' => $user['name'],
            'balance' => $user['balance']
        );

        $this->load_view('home/index', $data);
    }
}