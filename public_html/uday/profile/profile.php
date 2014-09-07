<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<?php
require '../php/core.inc.php';
require '../php/connect.inc.php';
include_once('../com.usk.api/database_connection.php');
include_once('../com.usk.api/form.php');
if (loggedin()) {

    $firstname = getfield('first_name');
    $lastname = getfield('last_name');
}
?>

<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LiberoDenken.com</title>


        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/coin-slider.js"></script>


        <link rel="stylesheet" href="../php/css/coin-slider-styles.css" type="text/css" />
        <link href="../php/style.css"rel="stylesheet" type="text/css" />
        <link href="css_image/style.css"rel="stylesheet" type="text/css" />
    </head>

    <body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" >

        <div class="head">
            <h1> <?php echo $firstname; ?></h1>
            <div align="right" style="margin-right: 100px;">

            </div>

        </div>  

        <div id="mainframe" style="text-align: center;">
            <br></br>
            <h1> <?php echo ' Welcome ' . $firstname ." ". $lastname . '. press <a href="../php/logout.php">LOG OUT'; ?></h1>
        </div>
        <!--div class="popular_course" -->

        <?php
        if (!isset($_SESSION['user_id'])) {
            echo "<script type=\"text/javascript\">.alert('You need to login again to continue!!!')</script>";
            return "../index.php";
        }
        $strsql = "SELECT status from quiz where email = '" . $_SESSION['user_id'] . "' and type = 'PHP'";
        $rs = mysql_query($strsql);
        $_COOKIE['PHP'] = "PHP_RED.png";
        if (($row = mysql_fetch_array($rs))) {
            if ($row['status'] != 0) {
                $_COOKIE['PHP'] = "PHP_GREEN.png";
            }
        }
        
        $strsql = "SELECT status from quiz where email = '" . $_SESSION['user_id'] . "' and type = 'JAVA'";
        $rs = mysql_query($strsql);
        $_COOKIE['JAVA'] = "JAVA_RED.png";
        if (($row = mysql_fetch_array($rs))) {
            if ($row['status'] != 0) {
                $_COOKIE['JAVA'] = "JAVA_GREEN.png";
            }
        }
        
        $strsql = "SELECT status from quiz where email = '" . $_SESSION['user_id'] . "' and type = 'C'";
        $rs = mysql_query($strsql);
        $_COOKIE['C'] = "C_RED.png";
        if (($row = mysql_fetch_array($rs))) {
            if ($row['status'] != 0) {
                $_COOKIE['C'] = "C_GREEN.png";
            }
        }
        
        
        ?>
        <div class="course_updates" style="width: 1720px;height:1000px;"> 
            <div class="popular_course" style="width: 1210px;"> 
                <p>Popular Courses</p>
                <ul style="display: inline">
                    <li style="display: inline-block">
                        <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                            <?php $_POST['email'] = $_SESSION['user_id'] ?>
                            <a href="../quiz/login.php?"><img src="../images/<?php echo $_COOKIE['PHP'] ?>" style="width: 350px;height: 200px;"/></a> 

                        </div>
                    </li>   
                    <li style="display: inline-block">
                        <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                            <a href="../quiz/login.php?"><img src="../images/<?php $_COOKIE['C'] ?>" style="width: 350px;height: 100px;"/> </a>
                            <p>Reviews</p> 
                            <p>Likes</p> 
                        </div>
                    </li>      
                    <li style="display: inline-block">
                        <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                            <a href="../quiz/login.php?"><img src="../images/<?php $_COOKIE['JAVA'] ?>" style="width: 350px;height: 100px;"/> </a>
                            <p>Reviews</p> 
                            <p>Likes</p> 
                        </div>
                    </li>   
                </ul> 
            </div>   

            <div class="updates" align="center"> 
                <p>New updates</p>
                <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                    <a href="#"><img src="../images/android.jpg" style="width: 350px;height: 100px;"/> </a>
                    <?php
                    $query = "SELECT COUNT(*),TYPE FROM CRAWLLINK GROUP BY TYPE LIMIT 0,30";
                    $rs = mysql_query($query);
                    $var = "";
                    while ($row = mysql_fetch_array($rs)) {
                        $var = $var . "<br>" . $row['COUNT(*)'] . " new courses of " . $row['TYPE'] . " added this week<br>";
                    }

                    $cou = 0;

                    /*                     * while (($var = nextText())) {
                      echo $var;
                      echo "<br>";
                      $cou++;
                      if ($cou > 100)
                      break;
                      }* */
                    echo "<font size=6>" . $var . "</font>";
                    ?>
                    <p>Reviews</p> 
                    <p>Likes</p> 
                </div>
                <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                    <a href="#"><img src="../images/android.jpg" style="width: 350px;height: 100px;"/> </a>
                    <p>Reviews</p> 
                    <p>Likes</p> 
                </div>
                <div class="corners" style="background-color: #F2F2F2;width: 350px;"> 
                    <a href="#"><img src="../images/android.jpg" style="width: 350px;height: 100px;"/> </a>
                    <p>Reviews</p> 
                    <p>Likes</p> 
                </div>

            </div>       
        </div>  


    </body>
</html>
<?php
?>