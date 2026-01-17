<?php
namespace AppLogic;
use Database\DbFacade;

class AuthController {
    private $sessionToken;

    public function validate($user, $pass) {
        $db = new DbFacade();
        $result = $db->executeSelectQuery("SELECT * FROM users WHERE name='$user'");
        return !empty($result);
    }
}
