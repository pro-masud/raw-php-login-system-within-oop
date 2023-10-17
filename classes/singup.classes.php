<?php 

class Singup extends Dbh{
    /**
     * check user 
     * */ 
    protected function checkUser($userid, $email){
        $sinup = $this -> connected() -> prepare("SELECT users_id FROM users WHERE users_id = ? OR email = ?");
    }
}