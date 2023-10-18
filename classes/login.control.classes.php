<?php 
/**
 * create a singup controler class
 * */ 
class LoginControl extends Login{
    private  $userid;
    private  $password;
    private  $result;

    public function __construct($userid, $password){
        $this -> userid         = $userid;
        $this -> password       = $password;
    }


    public function loginUser(){
        // if emptyinput also false
        if($this -> emptyInput() == false){
            header("location: ../index.php?error=emptyinput");
            exit();
        }


        $this -> getUser($this -> userid, $this -> password);
    }


    private function emptyInput(){
        if(empty($this -> userid) || empty($this -> password) ){
            $this -> result = false;
        }else{
            $this -> result = true;
        }
        return  $this -> result;
    }
}