<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="css/upload_quiz.css" />
<title>Create a Quiz</title>
</head>
<?php
 include_once('../com.usk.api/database_connection.php');
 function putInLoops($howMuch,$type){
  for($i = 0;$i < $howMuch; $i++){
    if($type=="tabs"){
	  echo "\t"."&nbsp;"."\t";	
	}else{ 
	  echo $type;
	}
  }
 }
   
  function getQuery($id,$question,$options,$answer,$type){
	  $query = "";
	  if($type=="MCQ"){
		    $query[0] = "INSERT INTO QUESTIONS VALUES(".$id.",'".$question."')";
	   }
	return ;   
  }
?>
<?
  function confirm($question_no){
   $query = 'select count(*) from questions where id = '.$question_no;
   $rs = mysql_query($query);
   $row = $my_sql_fetch_array($row);   
   if($row['count(*)'] == 0)
      return false;
   else return true;  
 }
?>
<div id="contain_ques" align="center" >
  <form id=load onsubmit="if(document.getElementById('ques') != ''){ return confirm('Are You sure?'); }else{ return false; }">
    <div class="left_right_left">
              <div class="standard_font_l">
              	<b>Question Number:</b>
              </div>
      <div class="standard_font" >
              	<label for="Question Type" title="Select The Question Number">
              	<input type="range" class="standard_font" name="Question Type"/>
		</label>
              </div>
          </div>
      <div class="submit">
         <input type="submit">
      </div>
         
         <?php putInLoops(5,"</br>"); ?>
         
         <div class="left_right_left">
              <div class="standard_font_l">
              	<b>Enter the Question here :</b>
              </div>
              <div class="standard_font" >
              	<textarea name="Questions" cols="500" rows="500" id="ques" wrap="soft" class="standard_font" spry:sort="ascending"/></textarea>
              </div>
         </div>
          
  </form>
</div>

<body>
</body>
</html>