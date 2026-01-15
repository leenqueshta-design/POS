<?php
namespace AppLogic;
use Database\DbFacade;

class InventoryManager {
    public function updateStock() {
        $db = new DbFacade();
        return $db->executeUpdateQuery("UPDATE inventory SET stock = stock - 1");
    }
}