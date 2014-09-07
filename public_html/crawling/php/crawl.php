
<?php

require_once 'simple_html_dom.php';
include_once('../../com.usk.api/idecompiler.php');
include_once('../../com.usk.api/database_Connection.php');
echo "<html>\n";
echo "<head>\n";
echo "\n</head>";
echo "\n<body>";
echo "<h1> CRAWLING THE SITES........</h1>\n<br>\n";

function crawlMeWithTag($tagName,$value) {
    $data = "";
    $html = new simple_html_dom();
    $con = $GLOBALS['con'];
    $sql = "SELECT * FROM CRAWLLINK";
    $result = mysql_query($sql);
    if ($result) {
        while ($query_result = mysql_fetch_array($result)) {
            $var = $query_result['link'];
            $id = $query_result['id'];
            //echo $var;
            
            $html = file_get_html($var);
            
            if ($html) {
                if ($results = $html->find($tagName)) {
                    if ($results) {
                        $var = strip_tags($var);
                        echo "<hr><br>Fetching your code from : <a href=\"" . $var . "\">" . $var . "</a>" . "<br></hr>";
                        $i=0;
                        foreach ($results as $val) {
                            if ($val) {
                                $data = $data . "" . strip_tags($val);
                                echo "<br>";
                                $i++;
                                if($i == $value) break;
                            }
                        }
                        $data = "\n<div style=\"margin-left:200px;\">" . $data . "</div>\n";
                        $insert = "INSERT INTO CRAWL_CONTENT VALUES(" . $id . ",'" . $data . "')";
                        $data = polariseCode($data);
                        $data = colorMeOut("C", $data);
                        mysql_query($insert);
                        echo "\n" . $data . "\n";
                    }
                }
            }
        }
    }
    else
        echo "<h1 align=\"center\">Unable to fetch the results, Please Check that\n<br>You are connected to the network or the crawl-site has not changed its link";
}


crawlMeWithTag('pre',1);

echo "\n</body>";
echo "</html>";
?>
