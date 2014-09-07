<!DOCTYPE html >

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

if (isset($_GET['choice']) && isset($_GET['tablename'])&& isset($_GET['columnname'])&& isset($_GET['value'])&& isset($_GET['tag'])) {

    $choice = $_GET['choice'];
    $tablename = $_GET['tablename'];
    $columnname = $_GET['columnname'];
    $value = $_GET['value'];
    $tagname = $_GET['tag'];
    
    echo $choice ;
    echo "   ";
    echo $tablename ;
    echo "   ";
    echo $columnname ;
    echo "   ";
    echo  $value ;
    echo "   ";
    echo $tagname ;

   
    if (!empty($choice) && !empty($tablename) && !empty($columnname) && !empty($value)&& !empty($tagname) ){
        
       if($tablename=='newsupdates')
        $query = mysql_query( "update newsupdates set updates='$value' where tag='$tagname'" );
       
       if($tablename=='author')
        $query = mysql_query( "update author set authorname='$value' where tag='$tagname'" );

                                        echo ("<SCRIPT LANGUAGE='JavaScript'>
                                                window.alert('\\\.. updated..///')
                                                window.location.href='http://localhost/index.php';
                                                </SCRIPT>");
       
    } else
        echo "can't update";
    
}
//}

?>

