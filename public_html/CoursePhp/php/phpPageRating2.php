
<?php

$mysql_host = 'localhost';
$mysql_username = 'root';
$mysql_password = '';
$mysql_err = 'Not able to load the page';
$mysql_err2 = 'Could not connect';
$mysql_database = 'test';


if(!mysql_connect($mysql_host,$mysql_username,$mysql_password) || !mysql_select_db($mysql_database)){
 die($mysql_err2);
}


   
    $name=$_GET['rating'];  
    mysql_query( "update `courses` set rating='$name' where tag='ajax'");
    
    echo "ajax";

    echo ("<SCRIPT LANGUAGE='JavaScript'>
                                            window.alert('\\\..rating updated..///')
                                               window.location.href='http://localhost/coursePhp/phpPage.php?course=ajax';
                                                </SCRIPT>");


?>



