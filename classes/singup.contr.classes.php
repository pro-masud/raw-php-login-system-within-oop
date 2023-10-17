<?php 
/**
 * create a singup controler class
 * */ 
class SingupControl{
    private  $userid;
    private  $password;
    private  $reppassword;
    private  $email;
    public  $result;

    public function __construct($userid, $password, $reppassword, $email){
        $this -> userid         = $userid;
        $this -> password       = $password;
        $this -> reppassword    = $reppassword;
        $this -> email          = $email;
    }


    private function emptyInput(){
        if(empty($this -> userid) || empty($this -> password) || empty($this -> reppassword) || empty($this -> email)){
            $this -> result = false;
        }else{
            $this -> result = true;
        }
        return  $this -> result;
    }

    /**
     * checked invalide userid
     * */ 
    private function invalideUid(){
        if(!preg_match("/^[a-zA-Z0-9]*$/", $this -> userid)){
            $this -> result = false;
        }else{
            $this -> result = true;
        }
        return  $this -> result;
    }

    /**
     * checked invalide email
     * */

     private function invalideEmail(){
        if(!filter_var($this -> email, FILTER_VALIDATE_EMAIL)){
            $this -> result = false;
        }else{
            $this -> result = true;
        }
        return  $this -> result;
     }

     /**
     * checked Match password
     * */

     private function matchPassword(){
        if($this -> password !== $this -> reppassword){
            $this -> result = false;
        }else{
            $this -> result = true;
        }
        return  $this -> result;
     }


}