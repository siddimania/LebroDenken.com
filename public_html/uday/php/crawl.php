

<?php

require 'connect.inc.php';
include_once("simple_html_dom.php");

$html = new simple_html_dom();
$i=1;
$j=2;
while($j--){
    

        $sql="SELECT link FROM crawlink where id='$i'";
        
        $result=mysql_query($sql);
        $query_result = mysql_result($result,0,'link');
        echo $query_result;
        if($result){
           
            $html=file_get_html($query_result);
        
            $results = $html->find('pre');
            if($results){
                 echo $results[0];    
            }
            $i=$i+1;
        }
        else 
            break;
}
?>