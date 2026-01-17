<?php
namespace UserInterface;

class LoginScreen {
    public function render() {
        echo '
        <div style="border: 1px solid #ccc; padding: 20px; width: 300px; margin: 20px auto; font-family: Arial;">
            <h3>POS Login</h3>
            <form method="POST">
                <input type="text" name="user" placeholder="Username" style="width:100%; margin-bottom:10px;"><br>
                <input type="password" name="pass" placeholder="Password" style="width:100%; margin-bottom:10px;"><br>
                <button type="submit" name="action" value="login" style="width:100%; background:#28a745; color:white; border:none; padding:10px;">Login</button>
            </form>
        </div>';
    }

    public function handleLogin($user, $pass) {
        $ui = new UIFacade();
        if ($ui->getLoginStatus()) {
            echo "<div style='color:green; text-align:center;'>Welcome! Login Successful.</div>";
            return true;
        } else {
            echo "<div style='color:red; text-align:center;'>Invalid Credentials!</div>";
            return false;
        }
    }
}
