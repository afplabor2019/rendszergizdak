<?php

class home_model extends Model {

    public function get_user($id) {
        return $this->getRecord("SELECT * FROM `users` WHERE `id`=".$id);
    }
}