<?php
include_once('../com.usk.api/database_connection.php');
include_once('../com.usk.api/comments.php');
?>
<!DOCTYPE html>
<html>
    <head>

        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LiberoDenken.com</title>
        <style>
            .b1
            {
                width:100%;
                height:900px;

            }
            .SEARCH_B
            {
            }
            .theimg{
                height: 20px;
                width: 20px;}	

        </style>






        <link rel="icon" href="../images/Preview-icon.png" />

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="../js/coin-slider.js"></script>


        <link rel="stylesheet" href="../css/coin-slider-styles.css" type="text/css" />
        <link href="../css/style.css"rel="stylesheet" type="text/css" />

        <!--apply of java script-->


        <script>

            var w;
            function openfacebook() {
                w = window.open('https://www.facebook.com/login.php?skip_api_login=1&display=popup&social_plugin=like&next=http%3A%2F%2Fwww.facebook.com%2Fdialog%2Fplugin.optin%3F_path%3Dplugin.optin%26app_id%3D127760087237610%26client_id%3D127760087237610%26display%3Dpopup%26secure%3Dfalse%26social_plugin%3Dlike%26return_params%3D%257B%2522href%2522%253A%2522http%253A%252F%252Fwww.dzyngiri.com%252Fdesign-an-awesome-css3-search-box%252F%2522%252C%2522send%2522%253A%2522false%2522%252C%2522layout%2522%253A%2522button_count%2522%252C%2522width%2522%253A%2522120%2522%252C%2522show_faces%2522%253A%2522false%2522%252C%2522action%2522%253A%2522like%2522%252C%2522colorscheme%2522%253A%2522light%2522%252C%2522font%2522%253Anull%252C%2522height%2522%253A%252221%2522%252C%2522ret%2522%253A%2522optin%2522%252C%2522act%2522%253A%2522connect%2522%257D%26login_params%3D%257B%257D%26from_login%3D1&rcount=1', 'Facebook', 'width=500,height=500');
                w.focus();
                /*w.resizeTo(500,500);*/
            }

            function opengmailplus() {
                w = window.open('https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/up/?type%3Dst%26client%3D1%26gpsrc%3Dwidget%26parent%3Dhttps://apis.google.com%26proxy%3DI0_1379343610538%26rsz%3D1%26hl%3Den_US%26partnerid%3Dwidget&hl=en_US', 'Google+', 'width=900,height=900');
                w.focus();
                /*w.resizeTo(500,500);*/
            }


            function opentwitter() {
                w = window.open('https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Fwww.dzyngiri.com%2Fdesign-an-awesome-css3-search-box%2F&text=Design%20An%20Awesome%20CSS3%20Search%20Box%20-%20Dzyngiri&tw_p=tweetbutton&url=http%3A%2F%2Fwww.dzyngiri.com%2Fdesign-an-awesome-css3-search-box%2F&via=dzyngiri', 'twitter', 'width=500,height=400');
                w.focus();
                /*w.resizeTo(500,500);*/
            }



            function opentimbler() {
                w = window.open('https://www.tumblr.com/login', 'timbler', 'width=500,height=500');
                w.focus();
                /*w.resizeTo(500,500);*/
            }


            $(document).ready(function() {

                $("#slider a").first().show();

                var index = 0;
                var count = 5;

                function bannerRotator() {
                    $('#slider a').delay(4300).eq(index).fadeOut(function() {
                        if (index === count) {
                            index = -1;
                        }

                        $('#slider a').eq(index + 1).fadeIn(function() {
                            index++;
                            bannerRotator();
                        });
                    });
                }
                bannerRotator();

            });

        </script>
        <script type="text/javascript">
            function search(key) {
                document.getElementById("search1").action = "get1.php?search=" + key + "&id=books";
                document.getElementById("search1").method = "post";
                document.getElementById("search1").submit();


            }
        </script>
        <script type="text/javascript">
            function search(key) {
                document.getElementById("search1").action = "get1.php?search=" + key + "&id=books";
                document.getElementById("search1").method = "post";
                document.getElementById("search1").submit();


            }
        </script>
        <script>
            function showHint(str)
            {
                var xmlhttp;
                if (str.length == 0)
                {
                    document.getElementById("txtHint").innerHTML = "";
                    return;
                }
                if (window.XMLHttpRequest)
                {// code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                }
                else
                {// code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function()
                {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200)
                    {
                        /*
                         * 0: request not initialized 
                         1: server connection established
                         2: request received 
                         3: processing request 
                         4: request finished and response is ready
                         */
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                }
                xmlhttp.open("GET", "new.php?q=" + str, true);
                xmlhttp.send();
            }
        </script>
    </head>



    <!------start of book code from here----------->
    <body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" >

        <header>
            <div class="mainhead">
                <div class="logo" >
                    <a href="index.html"><img src="../images/website_icon.png" width="500" height="150" border="0"/></a>

                </div>



                <div class="menu" align="center">
                    <ul>
                        <li><a href="../index.php" class="active">Home</a></li>
                        <li><a href="../courses/courses.html" class="panel">Courses </a></li>    
                        <li><a href="../video/video.php">Videos</a></li>
                        <li><a href="../underconstruction/index.html">Quizzes</a></li>
                        <li><a href="#">tutorials</a></li>
                    </ul>

                    <div class="hr2"><hr /></div>
                </div>

                <br></br>

            </div>
            <br></br>
        </header>

        <link rel="stylesheet" href="../css/video.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function search(key) {
                document.getElementById("search").action = "get.php?search=" + key + "&id=video";
            }
        </script>







        <link rel="stylesheet" href="../css/get.css"/>
        <link href="../css/style.css" rel="stylesheet" type="text/css" />
        <script type="text/javascript">
            function search(key) {
                document.getElementById("search").action = "get.php?search=" + key + "&id=video";
            }
        </script>



<!--<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>...................................back to top--> 



    </head>
<body  bgcolor="#EEEEEE" tracingsrc="src/background.png" tracingopacity="100">
    <!-- contains the head and logo in it-->
    <div id="all">

        <div id="contents">
            <?php
            $conn = $GLOBALS['con'];
            $search = urldecode($_GET['search']);
            $strsql = "SELECT * FROM VIDEOS WHERE tags LIKE '%" . $search . "%';";
            $rs = mysql_query($strsql, $conn) or die(mysql_error());
            if (!($row = mysql_fetch_array($rs))) {
                $row['url'] = "video/Loading.mp4";
                $row['tags'] = "";
                $row['snap_src'] = "";
            }
            $row['url'][5] = '\\';

            $img = "<img src=\"" . $row['snap_src'] . "\" height=150 width=300>\n</img>\n";

            echo "<div id=\"start\">"; //start div starts here
            echo "<div id=\"heading\" align=\"center\"><h1>" . $row['tags'] . "</h1></div>\n";
            echo "<div id=\"total\">"; //total div starts here
            echo "<div id=\"video\" align=\"left\" style=\"width:700;\">"; //video div starts here
           //   echo "<div id=\"vi\" align=\"center\" >\n"; // vi div starts here
            //echo "<video width=\"600\" height=\"400\" controls><source src=\"" . $row['url'] . "\" type=\"video/mp4\" id=\"source\"/></video>\n</div>\n"; //video tag ends here
            echo "\n</div>\n"; //vi div ends here
            echo "<div id=\"results\" align=\"right\" style=\"width=800\">\n<!--table id=\"rel\" style=\"border-color:\"#E10291H\";\" width=\"400\" align=\"left\"-->"; //result div starts here
            echo "<div class=\"Related-Videos\">Related Videos</div></td></tr>\n";


            $i = 0;
            while (($row = mysql_fetch_array($rs))) {
                $i++;
                $img = $row['snap_src'];
                $url = $row['url'];
                $tag = $row['tags'];
                echo '<div class="corners" style="width: 400px;height: 900px; margin-left: 50px; margin-top: 50px; "> 
                                            <p>popular videos</p>
                                            <ul style="display: inline">
                                            <li style="display: inline-block">
                                                <div class="corners" style="background-color: #F2F2F2;width: 350px;height: 200px;">'
                . '\n<a href=\"get.php?search="' . substr($url, 6, 9) . '"&id=video\" onclick=\"document.getElementById(\'source\').src=\"' . $url . '\";\">' . $tag . '</a></br>' . '\n<a href=\"get.php?search=' . substr($url, 6, 9) . '&id=video\"><img src=\"' . $img . '\" width=\"400\" height=\"200\" onclick=\"document.getElementById(\'source\').src=\"' . $url . '\";\"></img></a>\n' .
                '<a class="youtube" href="http://www.youtube.com/watch?v=4eYSpIz2FjU" title="name of video"><img src="images/android.jpg" style="width: 350px;height: 150px;"/> </a>
                                                    <p  style="color: #000; font-size: 20px;">Book Name</p>                                                 
                                                </div>
                                            </li>   
                                            </div>';
                if ($i > 10)
                    break;
            }
            echo "\n\n</div>"; // result div ends here

            echo "<div id=\"download\">\n"; // download div starts here
            echo "<form action=\"../com.usk.api/download.php?src=\"" . $row['url'] . "\">\n";
            echo "<input id=\"dnwd_frm\" type=\"submit\" id=\"download\"  value=\"Download\">\n";
            echo "</form>\n";
            echo "</div>\n"; //download div ends here
            echo "<div id=\"comments\">\n"; // comments div starts here
            echo drawBoxLayout("comments", "box", Array(100, 100, 200, 200));
            echo "</div>\n"; //comments div ends here
           // echo "</div>\n"; //start div ends here
           // echo "</div>\n"; // total ends here
           // echo "</div>\n"; // total ends here
            mysql_free_result($rs);
            mysql_close($conn);
            //return $row['snap_src'];
            ?>




            <p>&nbsp;</p> 
            <!--div all ends here-->

            <!--footer of file-->
            <!-- footer .......................................................................................................................-->
            <footer style="overflow: hidden">
                <div class="footer" > 
                    <div class="menu2">
                        <ul>
                            <li><a href="index.html" class="active">Home</a></li>
                            <li><a href="../about-us/about-us.html">About Us</a></li>
                            <li><a href="../underconstruction/index.html">Mobile</a></li>
                            <li><a href="../Complaint-form/complaintForm.html">Complaints</a></li>
                            <li><a href="../underconstruction/index.html">References</a></li>
                            <li><a href="../books/book.php">Books</a></li>
                            <li><a href="../contact-form/contact-form.html">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="menu" align="center">
                        <p>LiberoDenken framework is developed by Telerik - a leading provider of UI components for web, desktop and mobile applications. Trusted by over 100,000 customers worldwide for our devotion to quality and industry-best technical support, Telerik helps professionals maximize their productivity and "deliver more than expcted" every day.8 
                        </p>
                    </div>


                    <div class="network_icons" align="right">
                        <ul>
                            <li><a href="http://backup.playmintstudio.com/files/facebooktest.html"><img src="../images/facebook-icon.png"  width="30" height="30" border="0"/></li>
                            <li> <img src="../images/google-plus-icon.png" width="30" height="30" border="0" onclick="opengmailplus()"/></li>
                            <li> <img src="../images/twitter-icon.png" width="30" height="30" border="0" onclick="opentwitter()"/></li>
                            <li> <a href="Rssfeeds/rssfeed.html"><img src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/96/Web-RSS-Feed-Metro-icon.png" width="30" height="30" border="0"/></a></li>
                            <li> <img  id="last_icon" src="../images/tumblr-icon.png" width="30" height="30" border="0" onclick="opentimbler()"/></li>

                        </ul>
                    </div>



                    <div class="paragraph" align="left">
                        <h4>Private Policy</h4> 
                        <br />
                        <h5>Copyright(c) 2011-2013 LiberoDenken.com All right reserved</h5>
                    </div>

                    <div class="search">
                        <ul> 
                            <form action="php/subscribe.php" method="post">
                                <li><input type="text" value="" name="email" id="subscribe" size="45"/></li>
                                <div class="subscribe" align="right">
                                    <input type="submit" value="SUBSCRIBE" id="Signup_id" style="color:#F2F2F2; size:14px "/>
                                </div>
                            </form>    
                        </ul>
                    </div>

                    <h4>&nbsp;</h4>

                </div>
            </footer>


            <a href="#" class="back-to-top" style="color: #F2F2F2;">Back to Top</a>

            <script>
            $('.js-popup').on('click', function() {
                $.magnificPopup.open({
                    items: {
                        src: '<div class="white-popup"><div id="status">Review It</div><form action="php/star.php" method="post" style="margin-left:150px;" id="ratingForm"><fieldset class="rating"><legend>Please rate:</legend><input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label><input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label><input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label><input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label><input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label></fieldset><div class="clearfix"></div><button class="submit clearfix">Submit</button></form></div>',
                        type: 'inline'
                    }
                });
            });

            $(document).ready(function() {
                $("form#ratingForm").submit(function(e)
                {
                    e.preventDefault(); // prevent the default click action from being performed
                    if ($("#ratingForm :radio:checked").length == 0) {
                        $('#status').html("nothing checked");
                        return false;
                    } else {
                        $('#status').html('You picked ' + $('input:radio[name=rating]:checked').val());
                    }
                });
            });

            function dim() {
                var x = document.getElementById("mid_blog_id");
                x.style.display = "none";
                var y = document.getElementById("aboutus");
                y.style.display = "block";

            }
            </script>
        </div>
</body>
</html>