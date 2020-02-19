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

        
        if($winOrNot == 1 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance + ($bet * 10);
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You rolled the same number, You won! ';
            $_SESSION['result'] = "Result: " . $_POST['resultNumber'] . " Chosen number: " . $_POST['pickedNumber'];
        }
        elseif($winOrNot == 0 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You lost. Please try again!';
            $_SESSION['result'] = "Result: " . $_POST['resultNumber'] . " Chosen number: " . $_POST['pickedNumber'];
        }
        else{
            if($bet == 0){
                $_SESSION['message'] = 'Please place your bet.';
            }
            if($_POST['pickedNumber'] == 0){
                $_SESSION['result'] = 'Choose a number';
            }
            if($bet > $userBalance){
                $_SESSION['message'] = 'Bet can\'t be more than your balance';
            }
        }
       
        header("Location: ".URL."/game/dice");
    }

    function rock_paper_scissors_game(){
        $user= $this->model->get_user($_SESSION['id']);
        $userBalance = $user['balance'];
        $winOrNot = $_POST['winOrNot'];
        $bet = $_POST['bet'];

        
        
        if($winOrNot == 1 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance + ($bet * 3);
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = $_POST['userPick'] . ' beats ' . $_POST['computerPick'];
            $_SESSION['result'] = 'You won! ';
        }
        elseif($winOrNot == 0 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = $_POST['userPick'] . ' loses to ' . $_POST['computerPick'];;
            $_SESSION['result'] = 'You lost!';
        }
        elseif($winOrNot == 2 && $bet !=0 && $bet < $userBalance){
            $_SESSION['message'] = $_POST['userPick'] . ' equals ' . $_POST['computerPick'];;
            $_SESSION['result'] = 'Draw!';

        }
        else{
            if($bet == 0){
                $_SESSION['message'] = 'Please place your bet.';
            }
            if($bet > $userBalance){
                $_SESSION['message'] = 'Bet can\'t be more than your balance';
            }
        }
       
        header("Location: ".URL."/game/rock_paper_scissors");
    }

    function head_or_tail_game(){

        $user= $this->model->get_user($_SESSION['id']);
        $userBalance = $user['balance'];
        $winOrNot = $_POST['winOrNot'];
        $bet = $_POST['bet'];

        
        if($winOrNot == 1 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance + $bet;
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You picked the right side, You won! ';
            $_SESSION['result'] = "Result: " . $_POST['result'] . " Picked side: " . $_POST['userPick'];
        }
        elseif($winOrNot == 0 && $bet != 0 && $bet < $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
            $_SESSION['message'] = 'You lost. Please try again!';
            $_SESSION['result'] = "Result: " . $_POST['result'] . " Picked side: " . $_POST['userPick'];
        }
        else{
            if($bet == 0){
                $_SESSION['message'] = 'Please place your bet.';
            }
            if($_POST['pickedNumber'] == 0){
                $_SESSION['result'] = 'Choose a side';
            }
            if($bet > $userBalance){
                $_SESSION['message'] = 'Bet can\'t be more than your balance';
            }
        }
       
        header("Location: ".URL."/game/headortail");
    }

    function slotmachine_game(){
        if(isset($_POST['winOrNot']) && isset($_POST['bet'])){
                
            $user= $this->model->get_user($_SESSION['id']);
            $userBalance = $user['balance'];
            $winOrNot = $_POST['winOrNot'];
            $bet = $_POST['bet'];

            if($winOrNot == 1 && $bet != 0 && $bet < $userBalance){
                $newBalance = $userBalance + ($bet * 10);
                $this->model->update_balance($user['id'], $newBalance);
                
            }
            elseif($winOrNot == 0 && $bet != 0 && $bet < $userBalance){
                $newBalance = $userBalance - $bet;
                $this->model->update_balance($user['id'], $newBalance);
                
            }
        }   
    }
}