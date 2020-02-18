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

    public function headortail() {
        $this->load_view('game/headortail');
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

    function dice_game() {
        $user= $this->model->get_user($_SESSION['id']);
        $userBalance = $user['balance'];
        $winOrNot = $_POST['winOrNot'];
        $bet = $_POST['bet'];

        if($bet == 0){
            $_SESSION['message'] = 'Please place your bet.';
        }
        if($_POST['pickedNumber'] == 0){
            $_SESSION['result'] = 'Choose a number';
        }
        if($winOrNot == 1 && $bet != 0){
            $newBalance = $userBalance + ($bet * 10);
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You rolled the same number, You won! ';
            $_SESSION['result'] = "Result: " . $_POST['resultNumber'] . " Chosen number: " . $_POST['pickedNumber'];
        }
        elseif($winOrNot == 0 && $bet != 0){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You lost. Please try again!';
            $_SESSION['result'] = "Result: " . $_POST['resultNumber'] . " Chosen number: " . $_POST['pickedNumber'];
        }
       
        header("Location: ".URL."/game/dice");
        

    }
}