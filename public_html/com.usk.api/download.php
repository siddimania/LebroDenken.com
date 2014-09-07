<?php
;
  $src = urldecode($_GET['src']) or "../video/video/Loading.mp4";
  header('Content-Type: application/download');
  header("Content-Disposition: attachment; filename=".$src);
  header("Content-Length: " . filesize($src));
  $fp = fopen($src, "r");
  //fpassthru($fp);
  fclose($fp);
  return $fp;
?>