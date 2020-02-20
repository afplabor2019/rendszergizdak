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

        
        if($winOrNot == 1 && $bet > 0 && $bet <= $userBalance){
            $newBalance = $userBalance + ($bet * 10);
            $this->model->update_balance($user['id'], $newBalance);
          
        }
        elseif($winOrNot == 0 && $bet > 0 && $bet <= $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
           
        }
    }

    function rock_paper_scissors_game(){
        $user= $this->model->get_user($_SESSION['id']);
        $userBalance = $user['balance'];
        $winOrNot = $_POST['winOrNot'];
        $bet = $_POST['bet'];

        
        
        if($winOrNot == 1 && $bet > 0 && $bet < $userBalance){
            $newBalance = $userBalance + ($bet * 3);
            $this->model->update_balance($user['id'], $newBalance);
           
        }
        elseif($winOrNot == 0 && $bet > 0 && $bet < $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
           
        }
        
    }

    function head_or_tail_game(){

        $user= $this->model->get_user($_SESSION['id']);
        $userBalance = $user['balance'];
        $winOrNot = $_POST['winOrNot'];
        $bet = $_POST['bet'];

        if($winOrNot == 1 && $bet > 0 && $bet < $userBalance){
            $newBalance = $userBalance + $bet;
            $this->model->update_balance($user['id'], $newBalance);
           
        }
        elseif($winOrNot == 0 && $bet > 0 && $bet < $userBalance){
            $newBalance = $userBalance - $bet;
            $this->model->update_balance($user['id'], $newBalance);
        }
       
    }

    function slotmachine_game(){
        if(isset($_POST['winOrNot']) && isset($_POST['bet'])){
                
            $user= $this->model->get_user($_SESSION['id']);
            $userBalance = $user['balance'];
            $winOrNot = $_POST['winOrNot'];
            $bet = $_POST['bet'];

            if($winOrNot == 1 && $bet > 0 && $bet <= $userBalance){
                $newBalance = $userBalance + ($bet * 10);
                $this->model->update_balance($user['id'], $newBalance);
                
            }
            elseif($winOrNot == 0 && $bet > 0 && $bet <= $userBalance){
                $newBalance = $userBalance - $bet;
                $this->model->update_balance($user['id'], $newBalance);
            }
        }   
    }

    function update_userinfo(){
        $user= $this->model->get_user($_SESSION['id']);
        echo $user['balance'];
    }

    function pass_balance(){
        $user= $this->model->get_user($_SESSION['id']);
        $balance = $user['balance'];
        echo json_encode($balance);  
    }
}