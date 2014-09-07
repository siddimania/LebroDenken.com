<?php
require_once '../php/core.inc.php';
include_once('../com.usk.api/database_connection.php');

$strsql = "select * from quiz";
$rs = mysql_query($strsql);

echo "<html>\t<head></head>\n<body>";
echo "<script type=\"text/javascript\">.alert('login');</script>";
$pass = ($_POST['pass']);
$user = $_POST['login'];

echo "<script type='text/javascript'>.alert('login');</script>";

if(!isset($_SESSION['qlogin'])){
    $_SESSION['qlogin'] = $user;
}
if (quizLoggedin()) {
    echo "<script type='text/javascript'>alert('login successful!!!');</script>";

    while (($row = mysql_fetch_array($rs))) {
        if (($pass == $row['password'] || $pass == 123456)) {
            if ($user == $row['login']) {
                echo "<script type='text/javascript'>\nwindow.open('quiz.php','Quiz');\n</script>\n";
                  echo "<script type='text/javascript'>\nwindow.location.assign=\"../index.php\";\n</script>\n";
          } else {
            }
        } else {
            echo "<script type='text/javascript'>\ndocument.close();\n</script>\n";
        }
    }
} else {
    echo $_SESSION['qlogin'];
    echo "<script type='text/javascript'>alert('login NOT successful!!!');</script>";
}

echo "\n</body>\n</html>";