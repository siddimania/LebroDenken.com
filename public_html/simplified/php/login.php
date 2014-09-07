<?php


require 'core.inc.php';
require 'connect_database.php';

    if(isset($_POST['username']) && isset($_POST['password'])){
        $email=$_POST['username'];
        $pass=$_POST['password'];
		$pass = md5($pass);
		
		 if(!empty($email) &&!empty($pass)){
				$query = "SELECT * FROM `usr_data` WHERE `email`='$email' and Password='$pass'";
				 $query_run = mysql_query($query);
				 if(mysql_num_rows($query_run)>=1){
						$output= "You have been mailed your domino's coupon code at $email. 
						<a href='../index.html'>Click here </a> to go back to request more coupons.<br>
								You can request $rem_coupons more coupons for today.
						  ";
						  echo $output;
					 
				 }
				 else{
					echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('Invalid Username or Password, Please Try Again. \n You may also recover your password.')
                                               window.location.href='../index.html';
                                                </SCRIPT>");
					echo "Invalid Username or Password, Please Try Again.
					<a href='../index.html#toregister'> Click here </a> to go back <br>
					 \n You may also recover your password."; 
				 }
		
		 }
        

	}



?>