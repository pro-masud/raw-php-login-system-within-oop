<?php 
class Dbh{
    /**
     * create a database connection
     * */ 
    protected function connected(){
        try{
            $username = "root";
            $password = "";
            $dbh = new PDO('mysql:host=localhost;dbname=loginsystem', $username, $password);
            return $dbh;
        }catch(PDOException $e){
            print "Error!: " . $e -> getMessage() . "<br>";
            die();
        }
    }
}