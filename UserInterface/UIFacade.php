<?php
namespace UserInterface;
use AppLogic\ALFacade;

class UIFacade {
    private $alFacade;

    public function __construct() {
        $this->alFacade = new ALFacade();
    }

    public function getLoginStatus() {
        return $this->alFacade->authorizeAccess();
    }

    public function displayDashboard() {
        echo "<b>Dashboard Loaded Successfully.</b><br>";
    }
}
