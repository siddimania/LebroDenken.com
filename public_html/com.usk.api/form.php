<!--
- The Form API
- @author Uday Kandpal
-->
<?php 
  $method = "GET";
  $hidden = "false";
  
  $text_width = "140px";
  $text_height = "40px";
  $text_align = "center";
  
  $text_area_width = "140px";
  $text_area_width = "140px";
  $text_area_align = "center";
  
  $button_width = "140px";
  $button_height = "40px";
  $button_align = "center";
  
  function setHidden($value){
	  if($value == "true" || $value == "false"){
		 $GLOBALS['hidden'] = $value;  
	  }
  }
  
  function setTextBoxParameters($width,$height,$align){
	  $GLOBALS['text_width'] = $width;
	  $GLOBALS['text_height'] = $height;
	  $GLOBALS['text_align'] = $align; 
  }
  
  function setTextAreaParameters($width,$height,$align){
	  $GLOBALS['text_area_width'] = $width;
	  $GLOBALS['text_area_height'] = $height;
	  $GLOBALS['text_area_align'] = $align; 
  }
  
  function setButtonParameters($width,$height,$align){
	  $GLOBALS['button_width'] = $width;
	  $GLOBALS['button_height'] = $height;
	  $GLOBALS['button_align'] = $align; 
  }
  
  function setSubmitMethod($value){
	  if($value=="GET" || $value == "REQUEST" || $value == "POST" || $value == "$FILE"){
		 $GLOBALS['method'] = $value;  
	  }
  }
  
 function generateForm($name,$action,$text=0,$tarea=0,$button=0,$order,$value,$nextLine,$label){
	$what  = "<form  id=\"form_".$name."\" name=\"".$name."\" method=\"".$GLOBALS['method']."\" action=\"".$action."\" hidden=".$GLOBALS['hidden'].">\n";
	$val = $text + $button +$tarea;
	$x="";
	if($nextLine==true){
	 $x = "\n<br>";	
	}else{
		 $x = $nextLine;
	}
	for($i = 0; $i < $val; $i++){
	   	if($order[$i] == 1){
		    $what = $what."\n\t".$label[$i]."\t".drawTextBox("form_text_".$i,$value[$i],$i).$x."<br>";	
	    }
	   	if($order[$i] == 2){
		    $what = $what."\n\t".$label[$i]."\t".drawTextArea("form_textarea_".$i,$value[$i],$i,"none").$x."<br>";	
	    }
		
	   	if($order[$i] == 3){
		    $what = $what."\n\t".drawButton("form_text_".$i,$value[$i],$i,"submit").$x."<br>";	
	    }
    } 
	$what =  $what."\n</form>";
	return $what;
 }
 /*
 * on echoing is a text box is drawn with the given name,id and value.The values should be empty if TextBox should be clear
 */
 $text_cou = 0;
 function drawTextBox($name,$value,$id){
	 return "<input type=\"text\" name=\"".$name."\" id=\"text_".$GLOBALS['text_cou']++."\" title=\"".$value."\" value=\""."\" align=\"".$GLOBALS['text_align']."\"style=\" width:".$GLOBALS['text_width']."; height:".$GLOBALS['text_height']."\"/>\n";
 }
 
 
 /*
 * on echoing is a text box is drawn with the given name,id and value.The values should be empty if TextBox should be clear
 */
 $text_area_cou = 0;
 function drawTextArea($name,$value,$id,$resizable){
	 return "<textarea name=\"".$name."\" id=\"text_".$GLOBALS['text_area_cou']++."\" title=\""."\" value=\"".$value."\"align=\"".$GLOBALS['text_area_align']."\" style=\" width:".$GLOBALS['text_area_width']."; height:".$GLOBALS['text_area_height']."; resize:".$resizable.";\">\n".$value."\n</textarea>";
 }
 
 
 
 /*
 * on echoing is a text box is drawn with the given name,id and value.The values should be empty if TextBox should be clear
 */
 $button_cou = 0;
 function drawButton($name,$value,$id,$type){
	 if($type=="submit"){
	 return "<input type=\"submit\" name=\"".$name."\" id=\"text_".$GLOBALS['button_cou']++."\" title=\"".$value."\" value=\"".$value."\" align=\"".$GLOBALS['button_align']."\" style=\" width:".$GLOBALS['button_width']."; height:".$GLOBALS['button_height'].";\" onclick=\"button_".$name."_onclick()\"/>\n";
	 }
 }

?>