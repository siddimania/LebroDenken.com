<?php

require 'connect.inc.php';
require 'core.inc.php';
//require 'register.php';

if (isset($_POST['email']) && isset($_POST['password'])) {

    $username = $_POST['email'];
    $password = $_POST['password'];
    $password_hash = $password;

//echo $username;
//echo $password;

    if (!empty($username) && !empty($password)) {
        
       
                 $sql = "SELECT id FROM registerform WHERE `email`='$username' and `password`='$password_hash'";
                 $result = mysql_query($sql);

                 $count = mysql_num_rows($result);

                       if ($count == 1) {
                           
                           if($username=='siddimania@gmail.com'){
                                echo "<SCRIPT LANGUAGE='JavaScript'>
                                           
                                               window.location.href='http://localhost/login.php?login=admin';
                                                </SCRIPT>";
                               
                          
                               }
                           else{
                                    $user_id = mysql_result($result, 0, 'id');
                                    $_SESSION['user_id'] = $user_id;
                                    $_SESSION['qlogin'] = "$user_id";
                                    $_SESSION['qid'] = "0";
                                    header('Location:http://localhost/profile/profile.php');
                           }
                       } else {
                           echo "Wrong Username or Password";
                       }   
              
       
    } else
        echo "You must supply username and password";
}
?>

