<?php
namespace AppLogic;

class ALFacade {
    public function authorizeAccess() {
        $auth = new AuthController();
        return $auth->validate("admin", "123");
    }

    public function processSaleRequest() {
        $inv = new InventoryManager(); 
        return $inv->updateStock();
    }
}