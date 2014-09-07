
<?php
include_once('../com.usk.api/database_connection.php');
require_once '../php/core.inc.php';
if(isset($POST)){
    $_SESSION['qid'] = $GET['id'];
}
if (!isset($_SESSION['user_id'])) {
    echo "<script type=\"text/javascript\">\n";
    echo "\nwindow.open(\"../php/login.html\",\"You need to Login First\",\"width=700,height=400\");";
    echo "\nclose();</script>";
} else {
    $email = $_SESSION['user_id'];
    echo $_SESSION['qlogin'];
}
?>
<html>
    <head>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
    </head>
    <script>
        function onsub() {
            var login, pass;
            login = document.getElementById('login');
            pass = document.getElementById('pass');
            if (pass === '' || login === '') {
               alert('Hello,Is  there anyone to type?');
            }
            return false;
        }

    </script>    
    <body bgcolor="black">
        <div class="logo"> 
            <a href="index.html"><img src="../images/website_icon.png" width="500" height="150" border="0"/></a>
        </div>
        <hr width="1980">
        <?php
        for ($i = 1; $i < 4; $i++) {
            echo "<p>&nbsp;</p>";
        }
        ?>
        <div align="center" style="color:#FFF;vertical-align: center">
            <form action="check.php" method="post">
                
                <table style="color:#FFF;vertical-align: center;height:100">
                    <tr>
                        <td>
                            Login Id (As assigned by the administrator) : 
                        </td>
                        <td>
                            <input type="text" id="login" name="login">                            
                        </td>
                    </tr>
                    <tr>
                        <td>
                            Password(As assigned by the administrator) : 
                        </td>
                        <td>
                            <input type="password" id="pass" name="pass">
                        </td>
                    </tr>
                </table>
                <input type="submit">
            </form>
        </div>
    </body>

</html>

