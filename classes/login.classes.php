<?php 
class Login extends Dbh{
    /**
     * set user 
     * */ 
    public $resultCheck;
    protected function getUser($userid, $password){
        $login = $this -> connected() -> prepare("SELECT password FROM users WHERE userid = ? OR email = ?;");
   
        if(!$login->execute([$userid, $password])){
            $login = null;
            header("location: ../index.php?error=loginfaield");
            exit();
        }

        if($login->rowCount() == 0){
          $login = null;
          header("location: ../index.php?error=usernotfound");
          exit();  
        }

        $passwordHash = $login -> fetchAll(PDO::FETCH_ASSOC);
        $checkPwd = password_verify($password, $passwordHash[0]['password']);

        if($checkPwd){
            $login = null;
            header("location: ../index.php?error-wrongpassword");
            exit();
        }elseif($checkPwd == true){
            $login = $this -> connected() -> prepare("SELECT * FROM users WHERE userid = ? OR email = ? AND password = ?;");
           
            if(!$login->execute([$userid, $userid, $password])){
                $login = null;
                header("location: ../index.php?error=loginfaield");
                exit();
            }

            if($login->rowCount() == 0){
                $login = null;
                header("location: ../index.php?error=usernotfound");
                exit();  
            }

            $user = $login -> fetchAll(PDO::FETCH_ASSOC);

            session_start();
            $_SESSION['user_id'] = $user[0]['user_id'];
            $_SESSION['userid'] = $user[0]['userid'];    
        }
        $login = null;
    }


  
}