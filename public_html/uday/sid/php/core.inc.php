<?php


ob_start();
session_start();


//$current_file=$_SERVER['SCRIPT_NAME'];
//if(isset($_SERVER['HTTP_REFERER'])){
//$http_referer = $_SERVER['HTTP_REFERER'];
//}

function loggedin()  {

    if(isset($_SESSION['user_id']) && !empty($_SESSION['user_id'])){
        return true;
    }
    else
        return false;
}

function  getfield($field){
$query = "SELECT `$field` FROM `registerform` WHERE `id`='".$_SESSION['user_id']."'";
$query_run = mysql_query($query);
$query_result = mysql_result($query_run,0,$field);
if($query_result){
    return $query_result;
}
else
    echo"saif";
}
?>