<?php
session_start();

spl_autoload_register(function ($class) {
    $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
    if (file_exists($file)) require_once $file;
});

use UserInterface\LoginScreen;
use UserInterface\SalesInterface;

echo "<body style='background: #f4f7f6; font-family: sans-serif;'>";
$loginScreen = new LoginScreen();
$salesScreen = new SalesInterface();

if (isset($_GET['logout'])) {
    session_destroy();
    header("Location: index.php");
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['action']) && $_POST['action'] === 'login') {
        if ($loginScreen->handleLogin($_POST['user'], $_POST['pass'])) {
            $_SESSION['is_logged_in'] = true;
        }
    } elseif (isset($_POST['action']) && $_POST['action'] === 'process') {
        $salesScreen->processSale();
        echo "<div style='background:#d4edda; color:#155724; padding:15px; width:470px; margin:10px auto; border-radius:5px; text-align:center; border: 1px solid #c3e6cb;'>
                <b>Success!</b> The sale has been processed and inventory updated.
              </div>";
    }
}

// العرض
if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'] === true) {
    $salesScreen->render();
} else {
    $loginScreen->render();
}

echo "</body>";