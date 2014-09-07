<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php

require 'core.inc.php';
require 'connect.inc.php';
if(loggedin()){
    
    $firstname = getfield('first_name');
    $lastname = getfield('last_name');
   
}

?>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LiberoDenken.com</title>
        
        
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    	<script type="text/javascript" src="js/coin-slider.js"></script>
       
    	
        <link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />
    	<link href="style.css"rel="stylesheet" type="text/css" /></head>

<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" >
 
    <div class="head">
        <h1> <?php echo $firstname;?></h1>
        <div align="right" style="margin-right: 100px;">
           
        </div>
        
    </div>  
    
    <div id="mainframe" style="text-align: center;">
        <br></br>
        <h1> <?php echo ' To Log out .'.$firstname.'.'.$lastname.'. press <a href="logout.php">LOG OUT' ;?></h1>
    </div>
   
</body>
</html>
