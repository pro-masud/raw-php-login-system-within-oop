<?php 
class Singup extends Dbh{
    /**
     * set user 
     * */ 
    public $resultCheck;
    protected function setUser($userid, $password, $email){
        $sinup = $this -> connected() -> prepare("INSERT INTO users (userid, password, email) VALUES (?, ?, ?);");
   
        // hash password
        $hashPass = password_hash($password, PASSWORD_DEFAULT);
        if(!$sinup->execute([$userid, $hashPass, $email])){
            $sinup = null;
            header("location: ../index.php?error=sinupfailed");
            exit();
        }
       $sinup = null;
    }


    /**
     * check user 
     * */ 
    protected function checkUser($userid, $email){
        $sinup = $this -> connected() -> prepare("SELECT users_id FROM users WHERE userid = ? OR email = ?");
   
        if(!$sinup->execute([$userid, $email])){
            $sinup = null;
            header("location: ../index.php?error=loginfailed");
            exit();
        }

        if($sinup->rowCount() > 0){
            $this -> resultCheck = false;
        }else{
            $this -> resultCheck = true;
        }
        return  $this -> resultCheck;
    }

  
}