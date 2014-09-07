<?php

 mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("test") or die(mysql_error());
 
  $conn = mysql_connect("localhost", "root", ""); 

  mysql_select_db("test"); 
  
 // echo $search;
 // echo $key;
  
  $strsql = "SELECT * FROM pdf;"; 
  $rs = mysql_query($strsql, $conn) or die(mysql_error()); 
  $a=array();
  $i=0;
   //echo $rs['tags'];
  while($row = mysql_fetch_array($rs))
   { 
      $a[$i++]=$row['tags'];}


//get the q parameter from URL
$q=$_GET["q"];

//lookup all hints from array if length of q>0
if (strlen($q) > 0)
  {
  $hint="";
  for($i=0; $i<count($a); $i++)
    {
    if (strtolower($q)==strtolower(substr($a[$i],0,strlen($q))))
      {
      if ($hint=="")
        {
        $hint=$a[$i];
        }
      else
        {
        $hint=$hint." , ".$a[$i];
        }
      }
    }
  }

// Set output to "no suggestion" if no hint were found
// or to the correct values
if ($hint == "")
  {
  $response="no suggestion";
  }
else
  {
  $response=$hint;
  }

//output the response
echo $response;
  
  	 
  
?>











