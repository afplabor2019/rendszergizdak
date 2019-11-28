<?php

class settings_model extends Model{
    
    function update_user_data($id,$name,$password){
        $this->executeDML("UPDATE `users` SET `name`='".$name."',`password`='".$password."' WHERE `id`= '".$id."'");
    }
       
}