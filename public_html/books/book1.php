<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<?php
mysql_connect('localhost','root','');
 $con = mysql_select_db('test');
 $str = "SELECT * FROM pdf";
 $rs = mysql_query($str);
 $ur="";
 $shots="";
 $i=0;
 $tags="";
 $url="";
 $a='<table width="500px" border="0" cellpadding="5">';
 echo $a;
 $a1='<tr>';
 $a2="<br />"."<h2 >"."BOOKS AVAILABLE FOR DOWNLOAD:"."</h2>"."</p>"."<br />";
 echo $a2;
 
 while($row = mysql_fetch_array($rs))
   {    $url=$row['url'];
	    $shots=$row['shots'];
		$tags=$row['tags'];
		//echo $shots;
	//echo $shots."snknknkn kn ";	
 //echo $shots;
 
 //echo $shots;
 $i++;
 //for($i=0;$i<18;$i++)
 
 $a3="<td align=/"."center"."/" ."valign=/"."center/"." >";
 echo $a3;
 echo"<p>";
// echo $url;
  echo"<a href=\""."download3.php?file=".$url."\">";
echo "<img src=\"images\\".$row['shots']."\" height=180px width=180px>\n</img>\n";
echo "</a></p>";

//Download image 1"
 //echo "<br>";
//echo $a4;
//echo "<td align=/"."left>";
echo "<br>";
echo '<p id="go">';
echo $tags;
echo '</p>';
if($i%3==0&&$i>2)
{
echo"</tr>";}}
echo"</table>";
?>
</body>
</html>