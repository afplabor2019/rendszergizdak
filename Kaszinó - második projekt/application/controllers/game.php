<?php

class Game extends Controller {

    public $model;

    function __construct() {
        $this->model = $this->load_model('game_model');
    }

    public function index() {
        $this->load_view('game/index');
    }

    public function dice() {
        $this->load_view('game/dice');
    }

    public function headorwrite() {
        $this->load_view('game/headorwrite');
    }

    public function rock_paper_scissors() {
        $this->load_view('game/rock_paper_scissors');
    }

    public function roulett() {
        $this->load_view('game/roulett');
    }

    public function slotgame() {
        $this->load_view('game/slotgame');
    }

    function updateBalace() {
        $this->model->update_balace($_POST['id'], $_POST['balance']);
    }
}