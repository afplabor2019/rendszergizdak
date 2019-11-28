<?php

class Model {
    
    function __construct() {
    }

    function update_balance($id,$balance){
        $this->executeDML("UPDATE `users` SET `balance`='".$balance."' WHERE `id`= '".$id."'");
    }
    
    function get_user($id) {
        return $this->getRecord("SELECT * FROM `users` WHERE `id`=".$id);
    }

    function verify_user($name, $password) {
        $query = $this->getRecord("SELECT * FROM `users` WHERE `name`='".$name."' AND `password`='".$password."'");
        
        return $query['id'];
    }

    function getConnection() {
        $connection = new PDO(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME.';',DB_USER, DB_PASS);
        $connection->exec("SET NAMES '".DB_CHARSET."'");
        return $connection;
    }
    
    function getRecord($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetch() : [];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    function getList($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $result = $success ? $statement->fetchAll() : [];
        $statement->closeCursor();
        $connection = null;
        return $result;
    }
    
    function executeDML($queryString, $queryParams = []) {
        $connection = $this->getConnection();  
        $statement = $connection->prepare($queryString);
        $success = $statement->execute($queryParams);
        $statement->closeCursor();
        $connection = null;
    }
}