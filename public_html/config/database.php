<?php
echo $GET['form_text_0'];
$i = 0;
            function check(){
                $GLOBALS['i']++;
                 echo "alert('Connection was not successfull.Recheck password);";                
                 return true;
            }
  $conn = mysql_connect("localhost","root",$_COOKIE['_db']) or check();
  if($i==0) echo "alert('Connection was successful')";
  header("Content-type: text/plain");
  return "configure.php";
?>