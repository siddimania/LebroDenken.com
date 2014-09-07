<?php
  
  $str ="";
  
  function fetchPassword($str){
	 $root = "";
	 $fetch ="";
	 if(!$str){
	   return $root;	 
     }else{
	  for($i=0;$i < 10;$i++){
		 if(!$str[$i] || $str[$i] == '\n' || $str[$i] == '\0')break;  
	      $fetch = $fetch.$str[$i];
		 }
		 $root = $root.$fetch;
	 }
	 return $root;
  }
  
 $user = "root";
 $host = $_SERVER['HTTP_HOST'];
 $pass = fetchPassword(file_get_contents("database/config.ini"));
 $con = mysql_connect($host,$user,$pass) or 0;
 mysql_select_db("test");
 function isConnected(){
  if($GLOBALS['con'] == 0){
	   return false;
  }else{
	    return true;
   }
 }

?>