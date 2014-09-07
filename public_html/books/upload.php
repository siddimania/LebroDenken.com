<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title></title>
<style>
.r1
{
	color:#F00;}
</style>
</head>

<body>
<?php
$allowed=array("pdf");
//$tmp_name="\temp_name";
//$temp=explode(".",$_FILES["file"]["name"]);
//$extension=end($temp);
if($_FILES["file"]["type"] == "application/pdf")
//&&in_array($extension,$allowed)&&($_FILES["file"]["size"]<200000000)
 //)
//{
 /*if ($_FILES["file"]["error"] > 0)
    {
    echo "Error: " . $_FILES["file"]["error"] . "<br>";
    }*/
  //else
    {
    echo "Upload: " . $_FILES["file"]["name"] . "<br>"."<br>";
    echo "Type: " . $_FILES["file"]["type"] . "<br>"."<br>";
    echo "Size: " . ($_FILES["file"]["size"] / 1024) . " kB<br>"."<br>";
   // echo "Stored in: " . $_FILES["file"]["tmp_name"];
    
	if(file_exists("upload/".$_FILES["file"]["name"]))
{echo $_FILES["file"]["name"]."<br>"."<p class=\"r1\">"."ALREADY EXISTS."."</p>";
}
else
{
	move_uploaded_file($_FILES["file"]["tmp_name"],"upload/".$_FILES["file"]["name"]);
	//echo "stored in: "."uploads/".$_FILES["file"]["tmp_name"];
	}
  echo "<SCRIPT LANGUAGE='JavaScript'>          
                                                window.alert(\"uploaded\");
                                               window.location.href='http://localhost/books/book.php';
                                                </SCRIPT>";       
        
        
}	  
	//}
else
  {
  echo "Invalid file";
  }
?>
</body>
</html>