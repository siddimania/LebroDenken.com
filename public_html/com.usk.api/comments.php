<!--
-- The Comments Box API 
-  @author Uday Kandpal
-  Date : 30 September 2013
-->
<?php 
  /* 
  * This method returns the CSS name of the div container element of the simple box layout created in the given div.
  * The $ifDiv element contains the name of the div tag to place within.This uses the the javascript method to layout the contents.
  * The $name element contains the name of the div the Box Layou is enclosed in.
  * The $coords variable contains the value of rectangular form in form of an array as in (x1,y1,x2,y2) 
  */
  $id = 0;
  
  function drawBoxLayout($ifDiv,$name,$coords){
	    $task = "<div id='".$name."' style=\\\"background-color:rgb(200,200,200);\\\">\n"."\t<map name=\\\"Comments_Box_".$GLOBALS['id']."\\\">";
		$task = $task."\n<area hreflang=\\\"\\\" coords=\\\"".$coords[0].",".$coords[1].",".$coords[2].",".$coords[3]."\\\">";
		$task = $task."\n</area>\n</div>\n";
		$GLOBALS['id'] = $GLOBALS['id'] + 1 ;
		if(!$ifDiv){
	       $task = $task."<script type='text/javascript'>
             alert('The form was not able to create the comments box'".$name."'as the div element was not valid!!');
           \n</script>";		
	    }else{
			
	$task = $task."\n<script type='text/javascript'>
		         document.getElementById('".$ifDiv."').innerHTML = \"".$task."\";".
			  "\n</script>";
			
	    }
    echo $task;        
  }
  $a = Array('0' => 100,'1' => 100,'2' => 200,'3' => 200);
  drawBoxLayout("iv","welcome",$a);
  
?>