<?php

class game_model extends Model {
    
    function update_balance($id, $balance) {
        $this->executeDML("UPDATE `users` SET `balance`=".$balance." WHERE `id`=".$id);
    }
}