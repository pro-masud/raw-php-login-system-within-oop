<?php 
/**
 * sing up from get data for
 * */ 
if(isset($_POST['submit'])){
   $userid = $_POST['userid']; 
   $password = $_POST['password'];
   $reppassword = $_POST['reppassword'];
   $email = $_POST['email'];

  /**
   * include a singupContr class 
  */
  include"../classes/dbh.classes.php";
  include"../classes/singup.classes.php";
  include"../classes/singup.contr.classes.php";
  
  $singup = new SingupControl($userid, $password, $reppassword, $email);

  // running error heandling
  $singup -> singupUser();

  //go to back front-end page
  header("location: ../index.php?error=none");
}