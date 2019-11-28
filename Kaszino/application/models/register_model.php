<?php

class register_model extends Model{
    
    function insert_user($name,$password){
        $this->executeDML("INSERT INTO `users` (`name`, `balance`, `password`) VALUES
         ('".$name."', 10000, '".$password."')");
    }

    function check_if_user_exist($name){
        $this->executeDML("SELECT * FROM `users` WHERE `name` = '".$name."'");
    }
}