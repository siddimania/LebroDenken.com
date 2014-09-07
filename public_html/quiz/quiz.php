<?php
require '../php/core.inc.php';
require '../php/connect_database.php';
// connect database to video
echo "<!DOCTYPE html>";
echo "<html>";
echo "<head>";
echo "<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\">";
echo "<link rel = \"stylesheet\" src=\"css/quiz.css\">";
echo "<title>Quiz </title>";
echo "<script>";
echo "var counter = 60;";
echo "</script>";
echo "</head>";
echo "<body id=\"body\" oncontextmenu=\"return false;\"";
echo " onload=\"startTimer();\"";
echo ">";
include_once('../com.usk.api/database_connection.php');

$strsql = "SELECT * FROM  quiz";
$rs = mysql_query($strsql); //or die(mysql_error());
$timeup = 0;
if (!($row = mysql_fetch_array($rs))) {
    echo "\n<script type=\"text/javascript\">\nalert(\"Could not connect to server.Please contact administrator\");window.close();";
    
}
?>

<script type="text/javascript">
    
    var answers = new Array(), cur = 1, length = 0;
            var min = 5, sec1 = 0, hr = 00, counter = 0;
            function Minute() {
            if (min == 0) {
            if (hr == 0 && sec1 == 0) {
            TimeUp();
            } else {
            min = 59;
                    Hour();
            }
            } else {
            min--;
            }
            }
    function Second() {
    if (hr > 23) {
    TimeUp();
    }
    if (sec1 == 0) {
    if (min == 0 && hr == 0) {
    TimeUp();
    } else {
    sec1 = 59;
            Minute();
    }
    } else {
    sec1--;
    }

    }
    function Hour() {
    if (hr > 23) {
    alert('Invalid Time Interval')
    } else {
    if (hr != 0) {
    if (min == 0 && sec1 == 0){
    hr--;
    }
    } else {
    if (min == 0 && sec1 == 0) {
    TimeUp();
    } else {
    if (min == 0)
            alert('a few seconds left !!!');
    }
    hr--;
    }
    }
    }
    function startTimer() {
    var time = "";
            Second();
            if (hr <= 9) {
    time += ("0" + hr);
    } else {
    time += hr;
    }
    time += ":"
            if (min <= 9) {
    time += ("0" + min);
    } else {
    time += min;
    }
    time += ":";
            if (sec1 <= 9) {
    time += ("0" + sec1);
    } else {
    time += sec1;
    }
    if (!(sec1 == 0 && min == 0 && hr == 0)) {
    counter = setTimeout("startTimer()", 1000);
    } else {
    TimeUp();
    }
    document.getElementById("testtime").innerHTML = time + "(" + counter + ")";
    }

    function TimeUp() {
    var i = 0, ans;
            alert('TimeUp!!!');
            ans = answers[0]; ;
            for (i = 1; i < length; i++){
    ans += "," + answers[i];
            alert("value : " + length);
    }
    document.getElementById("body").innerHTML = "<b>Thanks for submitting the test.Your answers have been logged.";
            document.cookie = ";answer=" + ans;
            window.document.cookie = ";answer=" + ans;
            window.open("onTimeOut.php", "Feedback");
    }

    function setTask(qno, id) {
    answers[qno] = id;
            if (qno > length){
    length = qno;
    }
    cur = qno;
    setCookie("ans_no_" + qno, id,1);
    }

function setCookie(c_name,value,exdays)
{
var exdate=new Date();
exdate.setDate(exdate.getDate() + exdays);
var c_value=escape(value) + ((exdays==null) ? "" : "; expires="+exdate.toUTCString());
document.cookie=c_name + "=" + c_value;
}

</script>


<form name="quizTimer">
    <div id="exam_time" style="width: 90%; height: 100%; float: right;">
        <div style="float:left;"><?php ?></div>
        <div style="float:right ;">
            <table>

                <tr>
                    <td align="right" style="margin-top:5%;margin-right:2%;">
                        <font size="2"><b>
                            <span>Time Left :</span> <span id="testtime" name="testtime"></span>
                        </b></font>
                    </td>
                </tr>
                <tr>
                    <td><font size="2"><i>Welcome,<?php echo $row['user']; ?> </i></font></td>
                </tr>
            </table>
        </div>
    </div>
    <div class="clear"></div>
</form>
</br>
<div id="container">
    <?php
    $iss = 0;
    $strsql = "SELECT * FROM  questions";
    $rs = mysql_query($strsql) or die("Connection could not be established to the server");
    $ans = NULL;

    function loadQuestion($row, $i) {
        echo "\n<tr>\n<td>\n";
        echo "Ques. " . $row['id'] . "  " . $row['question'] . "</br>";
        echo "\n</td>\n</tr>\n";
        //$ans = "<tr id=\"ans_".$iss."\">\n</tr>";
    }

    function getOnFocus($id) {
        return "document.getElementById('" . $id . "').border ='blue';";
    }

    function loadAns($i) {
        $strsql1 = "SELECT * FROM  mcq where id = " . ($i + 1);
        $rs1 = mysql_query($strsql1); // or die("Connection could not be established to the server");
        $row = mysql_fetch_array($rs1);
        echo "\n<tr>\n<td id=\"td_" . $i . "\" bgcolor=\"white\"><form id=\"\" method=\"post\">";
        echo "\n<input type=\"radio\" name=\"radio_ans_" . $i . "_op\" id=\"radio_id_" . $i . "_1\"" . "onclick=\"setTask(" . $i . ",1)\"" . "_1\" />" . $row['op1'] . "&nbsp;&nbsp;</br>";
        echo "\n<input type=\"radio\" name=\"radio_ans_" . $i . "_op\" id=\"radio_id_" . $i . "_2\"" . "onclick=\"setTask(" . $i . ",2)\"" . " />" . $row['op2'] . "&nbsp;&nbsp;</br>";
        echo "\n<input type=\"radio\" name=\"radio_ans_" . $i . "_op\" id=\"radio_id_" . $i . "_3\"" . "onclick=\"setTask(" . $i . ",3)\"" . " />" . $row['op3'] . "&nbsp;&nbsp;</br>";
        echo "\n<input type=\"radio\" name=\"radio_ans_" . $i . "_op\" id=\"radio_id_" . $i . "_4\"" . "onclick=\"setTask(" . $i . ",4)\"" . " />" . $row['op4'] . "&nbsp;&nbsp;</br></br>";
        echo "\n</form>\n</div>\n</td>\n</tr>\n";
    }

    function startFormattedQuizLoading($i, $rs) {

        while (($row = mysql_fetch_array($rs))) {
            echo "<div id=\"table\">
  <table width=\"1200\" border=\"1\" cellspacing=\"5\" cellpadding=\"5\" summary=\"This contains the questions for the quizzes\"     bgcolor=\"#CCCCCC\">
    <caption>
      <!-- Enter the caption here-->
      </caption>
";
            loadQuestion($row, $i);
            loadAns($i);
            echo "";
            echo "
  </table>\n
  </div>\n</br></br>";
            $i++;
            if ($i > 50)
                echo "\n<script>\nalert('Paper has been overloaded.The quiz has ended');document.getElementById(\"table\").innerHTML=\"\";</script>";
        }
    }
    ?> 
    </br></br>
    <?php
    $i = 0;
    startFormattedQuizLoading($i, $rs);
    ?>
</div>
<form id ="" action="onTimeOut.php" onsubmit="timeUp()">
    <input type="submit">
</form>
</body>

</html>