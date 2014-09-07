<?php

echo "siddhartha";
include 'php/connect_database.php';
$sql = "SELECT * FROM trend";

$q   = mysql_query($sql) or die(mysql_error());
$xml = "<library>";
while($r = mysql_fetch_array($q)){
  $xml .= "<trend>";
  $xml .= "<id>".$r['id']."</id>";
  $xml .= "<cn>".$r['trendtitle']."</cn>";
  $xml .= "</trend>";  
}
$xml .= "</library>";
$sxe = new SimpleXMLElement($xml);
$sxe->asXML("tren.xml");
?>



