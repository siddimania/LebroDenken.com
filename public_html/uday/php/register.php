<?php

require 'core.inc.php';
require 'connect.inc.php';

if(!loggedin()){

    if(isset($_POST['Username']) &&isset($_POST['Password']) &&isset($_POST['Password_again']) &&isset($_POST['First_name']) &&isset($_POST['Last_name'])){

        $email=$_POST['email'];
        $confirm_email=$_POST['confirm_email'];
        $Password=$_POST['password'];
        $Password_again=$_POST['confirm_password'];

        $Password_hash = md5($Password);

        $First_name=$_POST['First_name'];
        $Last_name=$_POST['Last_name'];

        if(!empty($Username) && !empty($Password) && !empty($Password_again) && !empty($First_name) && !empty($Last_name)){

            if($Password == $Password_again){

                $query = "SELECT `email` FROM `users` WHERE `username`='$email'";
                if($query_run = mysql_query($query)){
                if(mysql_num_rows($query_num>=1))
                    echo "Already exists";
                

                }else{
                    $query = "INSERT INTO `users` VALUES ('','".$Username."','".$Password."','".$First_name."','".$Last_name."')";

                    if($query_run = mysql_query($query))
                        header('Location:register_success.php');
                }

            }else
                   echo "Password do not match";
            
        }else
                    echo "All fields are required";

        
       }
}
?>




