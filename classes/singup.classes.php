<?php 

class Singup extends Dbh{
    /**
     * set user 
     * */ 
    public $resultCheck;
    protected function setUser($userid, $password, $email){
        $sinup = $this -> connected() -> prepare("INSERT INTO users (userid, password, email) VALUES ('$userid','$password','$email')");
   
        if($sinup->execute([$userid, $email])){
            $sinup = null;
            header("location: ../index.php?error=sinupfailed");
            exit();
        }

        if($sinup->rowCount() > 0){
            $this -> resultCheck = false;
        }else{
            $this -> resultCheck = true;
        }
        return  $this -> resultCheck;
    }


    /**
     * check user 
     * */ 
    protected function checkUser($userid, $email){
        $sinup = $this -> connected() -> prepare("SELECT users_id FROM users WHERE users_id = ? OR email = ?");
   
        if($sinup->execute([$userid, $email])){
            $sinup = null;
            header("location: ../index.php?error=sinupfailed");
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