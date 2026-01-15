<?php
namespace Database;

class DbFacade {
    public function executeSelectQuery($sql) {
        return ["id" => 1, "user" => "admin"]; 
    }

    public function executeUpdateQuery($sql) {
        return 1; 
    }
}