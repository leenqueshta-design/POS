<?php
namespace UserInterface;
use AppLogic\ALFacade;

class SalesInterface {
    public function render() {
        echo '
        <div style="max-width: 500px; margin: 30px auto; font-family: sans-serif; border: 1px solid #ddd; border-radius: 8px; box-shadow: 0 4px 6px rgba(0,0,0,0.1); background: #fff;">
            <div style="background: #007bff; color: white; padding: 15px; display: flex; justify-content: space-between; align-items: center; border-radius: 8px 8px 0 0;">
                <span style="font-weight: bold;">Sales Terminal</span>
                <a href="?logout=1" style="color: #ff4d4d; text-decoration: none; font-size: 0.8em; background: white; padding: 5px 10px; border-radius: 4px; font-weight: bold;">Logout</a>
            </div>
            <div style="padding: 20px;">
                <div style="display: flex; justify-content: space-between; border-bottom: 1px dashed #ccc; padding: 10px 0;">
                    <span>Product: <b>Smart Watch v2</b></span>
                    <span>Qty: 1</span>
                </div>
                <div style="display: flex; justify-content: space-between; padding: 10px 0; font-size: 1.2em; color: #28a745;">
                    <span>Total Amount:</span>
                    <b>$150.00</b>
                </div>
                <form method="POST" style="margin-top: 20px;">
                    <button type="submit" name="action" value="process" 
                        style="width: 100%; padding: 12px; background: #28a745; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 1em; font-weight: bold;">
                        Confirm Sale & Update Inventory
                    </button>
                </form>
            </div>
        </div>';
    }

    public function processSale() {
        $al = new ALFacade();
        return $al->processSaleRequest();
    }
}