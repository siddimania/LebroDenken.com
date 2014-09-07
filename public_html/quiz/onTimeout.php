<?php
include_once('../com.usk.api/database_connection.php');
require_once '../php/core.inc.php';
$var;
$count = 0;
$results;
$results['mark_t'][$_SESSION['qid']] = 0;
echo "<h1 align=center>QUIZ REPORT</h1>";
for ($i = 0; $i < 10; $i++) {
    if (isset($_COOKIE['ans_no_' . $i])) {
        $var[$i] = $_COOKIE['ans_no_' . $i];
    } else {
        $var[$i] = 0;
        $GLOBALS['results']['giv_ans'] = 'NO ANSWER';
    }
    $GLOBALS['results']['giv_ans'] = $var;
}

// The function will create a report card based on the data fetched by the user after the timeout
function calculate_results() {
    $i = 0;
    $var = $GLOBALS['var'];
    $corr;
    if (!quizLoggedin()) {
        echo "<script type=\"text/javascript\">alert('NOT LOGGED IN!!!');</script>";
    }
    $strsql = "SELECT correct from mcq where qid = " . $_SESSION['qid'];
    $rs = mysql_query($strsql);
    $i = 0;
    $vars;
    while (($row = mysql_fetch_array($rs))) {
        $corr[$i++] = $row['correct'];
        $vars[$i] = $row['correct'];
    }
    $GLOBALS['results']['cor_ans'] = $vars[$i];
    $strsql = "SELECT first_name,last_name from registerform where id = " + $_SESSION['user_id'];
    $rs = mysql_query($strsql);
    if ($rs) {
        while (($row = mysql_fetch_array($rs))) {
            $GLOBALS['results']['name'] = $row['first_name'] . " " . $row['last_name'];
        }
    } else {
        $GLOBALS['results']['name'] = "GUEST";
    }
    $correct = 0;
    for ($i = 0; $i < 10 && quizLoggedIn(); $i++) {
        $login = $_SESSION['qlogin'];
        if ($var[$i] != 0) {
            if ($var[$i] == $corr[$i]) {
                $correct++;
            }
        }
    }
    $GLOBALS['results']['mark_o'] = $correct;
    if ($correct * 2 > 10) {
        $GLOBALS['results']['result'][$_SESSION['qid']] = '<b><font color ="GREEN">PASS</font></b>';
    } else {
        $GLOBALS['results']['result'][$_SESSION['qid']] = '<b><font color ="RED">FAIL</font></b>';
    }
    $GLOBALS['count'] = $correct;
}

function getReportCard() {
    $timeout = 0;
    if ($timeout == 1) {
        echo "<script type =\"text/javascript\"  alert('Timeout');</script>";
    }
    $results = calculate_results(); // fetch the results
    $results = $GLOBALS['results'];

    $marks_obt = $GLOBALS['count']; // total marks obtained
    $marks_tot = 10;  // total marks for paper  
    $name = $_SESSION['user_id']; //$results['name'];
    $chk_pass = $results['result'][0];
    $correct_answers = $results['cor_ans'];
    $given_answers = $results['giv_ans'];
    //echo("The report is being generated...");

    $str = "select email from registerform where id=".$_SESSION['user_id'];
    $rs11 = mysql_query($str);
    $name_;
    if ($rows = mysql_fetch_array($rs11)) {
        $name_ = $rows['email'];
    }
    $res_Str = "<div><br><b>Login-Email : </b>\n";
    $res_Str = $res_Str . $name_ . "\n<br>";
    $res_Str = $res_Str . "\n<b>RESULT :\n</b>";
    $res_Str = $res_Str . $chk_pass . "\n<br>";
    $res_Str = $res_Str . "\n<b>Marks Obtained : </b>";
    $res_Str = $res_Str . $marks_obt . "\n<br>";
    $res_Str = $res_Str . "\n<b>Marks Total : </b>";
    $res_Str = $res_Str . $marks_tot . "\n<br>";
    $res_Str = $res_Str . "\n<div id = \"results\"> <!--This will contain tables-->\n";
    $res_Str = $res_Str . "\n<table id=\"table_res\">\n";

    // echo "<script type ='text/javascript'>document.innerHTML='';</script>";
    $strsql = "SELECT * FROM  questions";
    $rs = mysql_query($strsql); //or die("Connection could not be established to the server");
    $varg;
    $strsql1 = "SELECT * FROM  mcq";
    $rs1 = mysql_query($strsql1);// or die("Connection could not be established to the server");
    $i = 0;
    while ($row = mysql_fetch_array($rs1)) {
        $varg[$i++] = $row['correct'];
    }
    for ($i = 0; $i < 10; $i++) {
        //   echo "<br>given =" . $_COOKIE["ans_no_" . $i] . " correct = " . $varg[$i];
    }

    for ($i = 0; $i < 10; $i++) {
        if ($_COOKIE["ans_no_" . $i] == $varg[$i]) {
            $str = "[ATTEMPTED CORRECTLY]";
        } else {
            if ($_COOKIE["ans_no_" . $i] == 0) {
                $str = "[NOT ATTEMPTED]";
            } else {
                $str = "[ATTEMPTED INCORRECTLY]";
            }
        }
        startFormattedQuizLoading($i, $rs, $varg[$i], $_COOKIE["ans_no_" . $i], $str);
    }

    $res_Str = $res_Str . "\n</table>\n</div>\n";
    return $res_Str;
}

echo getReportCard();
echo "<script type ='text/javascript> alert('You will be automatically logged out now!!!');</script>";
//session_destroy();


$iss = 0;
$strsql = "SELECT * FROM  questions";
$rs = mysql_query($strsql) or die("Connection could not be established to the server");
$ans = NULL;

function loadQuestion($row, $i) {
    echo "\n<tr>\n<td>\n";
    echo "Ques. " . $row['id'] . "  " . $row['question'] . "</br>";
    echo "\n</td>\n</tr>\n";
//    if (!isset($_COOKIE['ans_no_' . ($i + 1)])) {
//        $_COOKIE['ans_no_' . ($i + 1)] = 0;
//    }
//    //$ans = "<tr id=\"ans_".$iss."\">\n</tr>";
}

function getOnFocus($id) {
    return "document.getElementById('" . $id . "').border ='blue';";
}

function loadAns($i, $correct, $given, $str) {
    $strsql1 = "SELECT * FROM  mcq where id = " . ($i + 1);
    $rs1 = mysql_query($strsql1); // or die("Connection could not be established to the server");
    $row = mysql_fetch_array($rs1);
    // echo "correct" . $correct . " given : " . $given . "br";
    $var1 = ($given == 1 && $correct != 1) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>";
    $var1 = ($correct == 1) ? "<font color=\"green\"><img src=\"../images/tick.png\" width=20 height=20></img>" : (($given == 1) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>");
    $end1 = ($correct == 1 || $given == 1) ? "</font>" : "";
    $var2 = ($given == 2 && $correct != 2) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>";
    $var2 = ($correct == 2) ? "<font color=\"green\"><img src=\"../images/tick.png\" width=20 height=20></img>" : (($given == 2) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>");
    $end2 = ($correct == 2 || $given == 2) ? "</font>" : "";
    $var3 = ($given == 3 && $correct != 3) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>";
    $var3 = ($correct == 3) ? "<font color=\"green\"><img src=\"../images/tick.png\" width=20 height=20></img>" : (($given == 3) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>");
    $end3 = ($correct == 3 || $given = 3) ? "</font>" : "";
    $var4 = ($given == 4 && $correct != 4) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font>";
    $var4 = ($correct == 4) ? "<font color=\"green\"><img src=\"../images/tick.png\" width=20 height=20></img>" : (($given == 4) ? "<font color=\"orange\"><img src=\"../images/wrong.png\" width=20 height=20></img>" : "<font color = black>");
    $end4 = ($correct == 4 || $given = 4) ? "</font>" : "";
//    $var1 = $var2 = $var3 = $var4 = $end1 = $end2 = $end3 = $end4 = "";
    echo "\n<tr>\n<td id=\"td_" . $i . "\" bgcolor=\"white\">";
    echo "\n<p>" . $var1 . $row['op1'] . $end1 . "&nbsp;&nbsp;</br></br>";
    echo "\n<p>" . $var2 . $row['op2'] . $end2 . "&nbsp;&nbsp;</br></br>";
    echo "\n<p>" . $var3 . $row['op3'] . $end3 . "&nbsp;&nbsp;</br></br>";
    echo "\n<p>" . $var4 . $row['op4'] . $end4 . "&nbsp;&nbsp;</br></br>";
    echo "<b>" . $str . "</b>";
    echo "<b> CORRECT :" . $correct . "</b>";

    echo "\n\n</div>\n</td>\n</tr>\n";
}

function startFormattedQuizLoading($i, $rs, $correct, $given, $str) {

    if (($row = mysql_fetch_array($rs))) {
        echo "<div id=\"table\">
  <table width=\"1200\" border=\"1\" cellspacing=\"5\" cellpadding=\"5\" summary=\"This contains the questions for the quizzes\"     bgcolor=\"#CCCCCC\">
    <caption>
      <!-- Enter the caption here-->
      </caption>
";
        loadQuestion($row, $i + 1);
        loadAns($i, $correct, $given, $str);
        echo "";
        echo "
  </table>\n
  </div>\n</br></br>";

        if ($i > 50)
            echo "\n<script>\nalert('Paper has been overloaded.The quiz has ended');document.getElementById(\"table\").innerHTML=\"\";</script>";
    }
}

$sr = "UPDATE  QUIZ SET PSTATUS = 1 WHERE login=" . $_SESSION['user_id'];
$rs = mysql_query($sr);
for ($i = 0; $i < 10; $i++)
    $COOKIE["ans_no_" . $i] = 0;
?>
<script type ="text/javascript">
    window.location.href = "http://localhost";
</script>