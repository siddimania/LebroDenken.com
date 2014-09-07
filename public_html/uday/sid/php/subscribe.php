<?php

require 'connect.inc.php';
//require 'register.php';

if(isset($_POST['email'])){
    $username = $_POST['email'];
    echo $username;
    if(!empty($username)){
        $sql="SELECT id FROM subscribe WHERE email='$username'";
        $result=mysql_query($sql);
        $count=mysql_num_rows($result);

        if($count!=1){
            $query = "INSERT INTO `subscribe` VALUES ( DEFAULT,'".$username."')";
            
            mysql_query($query);
            echo 'success insertion......';
            header('Location: http://localhost/index.html');
        }
        else 
             echo " email Already Exit ";
     }

    else
        echo "You must supply email";

}

?>
