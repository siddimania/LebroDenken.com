<?php


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
     echo "you are in else";
  }
 


    if(isset($_POST['firstname']) && isset($_POST['lastname'])&& isset($_POST['userenroll'])&& isset($_POST['userbranch']) && isset($_POST['emailsignup'])&& isset($_POST['passwordsignup'])&& isset($_POST['passwordsignup_confirm'])){
        $First_name=$_POST['firstname'];
        $Last_name=$_POST['lastname'];
        $user_enroll=$_POST['userenroll'];
        $user_branch=$_POST['userbranch'];
        $email=$_POST['emailsignup']; 
        
        $Password=$_POST['passwordsignup'];
        
        $Password_hash= md5($Password);
        
        $Password_again=$_POST['passwordsignup_confirm'];
        

        if(!empty($user_branch) &&!empty($user_enroll) &&!empty($email) && !empty($Password) && !empty($First_name) && !empty($Last_name)){

            if($Password == $Password_again){

                $query = "SELECT email FROM jiitform WHERE `email`='$email'";
                $query_run = mysql_query($query);
                
                if(mysql_num_rows($query_run)>=1){
                    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('Email Address Already Registered. Choose Another One.')
                                               window.location.href='../index.html#toregister';
                                                </SCRIPT>");
					echo "The email address you had provided is already in use. Kindly , provide another email address. 
					<a href='../index.html#toregister'> Click here </a> to go back";

                }else{
                    $hashtag= generateRandomString();
                    $query = "INSERT INTO jiitform VALUES ('$First_name','$Last_name',$user_enroll,'$user_branch','$email','$Password_hash')";
                    mysql_query($query);
					//echo $query;
                    //Sending Mail Here
				/*
					$to = "$email";
					$subject = "JIIT Simplified Registration Validation";
					$message = "Hello $First_name, How are you doing? Click the link to verify your email address. 
								http://www.jsm.playmintstudio.com/verify.php?email='$email'&pass='$hashtag'
								";
					$from = "admin@jiitsimplified.com";
					$headers = "From:" . $from;
					mail($to,$subject,$message,$headers);					
				*/
					
					//Sending Mail Here
					
                   echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('You have been successfully registered. Verify your email to continue further.')
                                               window.location.href='../index.html';
                                                </SCRIPT>");
				 echo "You have been registered successfully. For verification, check your mail and then 
					<a href='../index.html'> Click here </a> to go login";
												
                    
                }

            }
            else
                    echo "Password do no match.<a href='../index.html#toregister'> Click here </a> to go back.";
            
        }
        
        else
                    echo "All fields are required.<a href='../index.html#toregister'> Click here </a> to go back.";

        
       }
	   
	   function generateRandomString($length = 10) {
			$characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
			$randomString = '';
			for ($i = 0; $i < $length; $i++) {
				$randomString .= $characters[rand(0, strlen($characters) - 1)];
			}
			return $randomString;
		}

?>




