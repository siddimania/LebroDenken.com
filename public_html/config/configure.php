<!-- This file is there to configure the database-->
<!--
-  @author Uday Kandpal <ukandpal2@gmail.com>
-->
<?php 
include_once('../com.usk.api/database_connection.php');
include_once('../com.usk.api/form.php'); 
?>
<html>
<head>
  <link href="../css/style.css" rel="stylesheet" type="text/css" />
  <script type="text/javascript" src="UICommons.js"/>
  <script type="text/javascript">
    function button_form_text_1_onclick(){
        alert("Connection Successfull");
   }
</script>
</head>
<body  style="margin-top:0px; margin-left:0px; border-color:rgb(159,159,255);" onload="getHeader('Header_script','../');document.cookie='created=once;expires=Sun, 01-Dec-2025 08:08:00 GMT'" >
    <div id ="Header_script">     
    </div>
<div align="center">
  <form style="margin-top:0px;">
    <p>&nbsp;</p><?php 
	  $pass_req = false;
	  $table = false;
	  if(!isConnected()){
		  $pass_req = true;
		  setHidden("false");
	  }else{
		$pass_req = false;
		setHidden("true"); 
	  }
	?> 
     <div id="database_pass" align="center" style="margin-left:200px; width:600px; height:200px;"><img src="../images/mysqli.jpg" title="Connect to : MySQLI" style="float:left"></img><?php 
  setSubmitMethod("POST");
  setTextBoxParameters("250px","40px","center");
  setHidden("true");
  //print_r($_ENV);
  echo generateForm("Form_1","configure.php",1,0,1,Array(1,3),Array("Database password","Submit"),"&nbsp;&nbsp;",Array("","Save"));
  ?></div>
    <?php
   include_once('../com.usk.api/database_connection.php');
   $conn = $GLOBALS['con'];
  $strsql[0] = "CREATE TABLE QUESTIONS(id int primary key,question varchar(10000),type varchar(100));";
  $strsql[1] = "CREATE TABLE ANSWERS(id int primary key,ans varchar(10000),type varchar(100));";
  $strsql[2] = "CREATE TABLE MCQ(id int primary key,op1 varchar(10000),op1 varchar(10000),op2 varchar(10000),op3 varchar(10000));";
  $strsql[3] = "CREATE TABLE PDF(id int primary key,name varchar(10000),url varchar(1000));";
  $strsql[4] = "CREATE TABLE VIDEOS(id int primary key,tags varchar(10000),snap_src varchar(100),url varchar(1000));";
  $strsql[5] = "CREATE TABLE QUIZ(id int primary key,user varchar(10000),age int(3),type varchar(15),marko int,markt int);";
  
  $i=0;
  
  function create($conn,$strsql){
      
   $i=1;
   for($i=0;$i<5;$i++){
	     $rs = mysql_query($strsql[$i], $conn); 
             if($rs){ 
                 echo "alert('Table created successfully');";
                 $GLOBALS['i']++;
             }
   }
   echo "alert('".$GLOBALS['i']." tables created successfully');";
   }
  
?>

    <p style="font-size:large">The following tables will be created in the database </br></br>
      <textarea tabindex="4" rows="10" cols="50" title="Tables to be created" readonly   contextmenu="false"  placeholder="false" style="resize:none; font-size:18PX; font:'Times New Roman'; font-weight:bold;">
      
      Questions 
      Answers
      MCQ
      Videos
      PDF
      Quiz
      </textarea>
    </p>
    <input type="button" onClick="<?php create($conn,$strsql) ?>" value="Create">
  </form>
</div>
</body>
</html>