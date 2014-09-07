<?php

require 'core.inc.php';
require 'connect_database.php';
require_once('recaptchalib.php');
 

$privatekey = "6LdNXekSAAAAAIEW6yf21__qNkkGZ-HJNB3QVVvh";
  $resp = recaptcha_check_answer ($privatekey,
                                $_SERVER["REMOTE_ADDR"],
                                $_POST["recaptcha_challenge_field"],
                                $_POST["recaptcha_response_field"]);

  if (!$resp->is_valid) {
    // What happens when the CAPTCHA was entered incorrectly
    die ("The reCAPTCHA wasn't entered correctly. Go back and try it again." .
         "(reCAPTCHA said: " . $resp->error . ")");
  } else {
     echo "<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('\\\..Succesfully..///')
                                               window.location.href='http://localhost/index.php';
                                                </SCRIPT>";
  }
 



    if(isset($_POST['firstname']) &&isset($_POST['lastname']) &&isset($_POST['email']) &&isset($_POST['password']) &&isset($_POST['confirm_password'])){

        $email=$_POST['email'];
        
        $Password=$_POST['password'];
        $Password_again=$_POST['confirm_password'];

        $Password_hash = md5($Password);

        $First_name=$_POST['firstname'];
        $Last_name=$_POST['lastname'];

        if(!empty($email) && !empty($Password) && !empty($Password_again) && !empty($First_name) && !empty($Last_name)){

            if($Password == $Password_again){

                $query = "SELECT `id` FROM `registerform` WHERE `email`='$email'";
                $query_run = mysql_query($query);
                
                if(mysql_num_rows($query_run)>=1){
                    echo "Already exists";
                

                }else{
                    $query = "INSERT INTO `registerform` VALUES ( DEFAULT,'".$First_name."','".$Last_name."','".$email."','".$Password_hash."')";
                    mysql_query($query);
                    
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('\\\..Succesfully Sign Up..///')
                                               window.location.href='http://localhost/index.html';
                                                </SCRIPT>");
                    
                }

            }
            else
                   echo "Password do not match";
            
        }
        
        else
                    echo "All fields are required";

        
       }

?>




