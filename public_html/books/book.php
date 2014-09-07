<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
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



        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
        <script type="text/javascript" src="js/coin-slider.js"></script>


        
        <link href="../css/style.css"rel="stylesheet" type="text/css" />

        <!--apply of java script-->


             <script>
            
			var w;
			function openfacebook(){
				w=window.open('https://www.facebook.com/login.php?skip_api_login=1&display=popup&social_plugin=like&next=http%3A%2F%2Fwww.facebook.com%2Fdialog%2Fplugin.optin%3F_path%3Dplugin.optin%26app_id%3D127760087237610%26client_id%3D127760087237610%26display%3Dpopup%26secure%3Dfalse%26social_plugin%3Dlike%26return_params%3D%257B%2522href%2522%253A%2522http%253A%252F%252Fwww.dzyngiri.com%252Fdesign-an-awesome-css3-search-box%252F%2522%252C%2522send%2522%253A%2522false%2522%252C%2522layout%2522%253A%2522button_count%2522%252C%2522width%2522%253A%2522120%2522%252C%2522show_faces%2522%253A%2522false%2522%252C%2522action%2522%253A%2522like%2522%252C%2522colorscheme%2522%253A%2522light%2522%252C%2522font%2522%253Anull%252C%2522height%2522%253A%252221%2522%252C%2522ret%2522%253A%2522optin%2522%252C%2522act%2522%253A%2522connect%2522%257D%26login_params%3D%257B%257D%26from_login%3D1&rcount=1','Facebook', 'width=500,height=500');
				w.focus();
				/*w.resizeTo(500,500);*/
			}
			
			function opengmailplus(){
				w=window.open('https://accounts.google.com/ServiceLogin?service=oz&passive=1209600&continue=https://plus.google.com/up/?type%3Dst%26client%3D1%26gpsrc%3Dwidget%26parent%3Dhttps://apis.google.com%26proxy%3DI0_1379343610538%26rsz%3D1%26hl%3Den_US%26partnerid%3Dwidget&hl=en_US','Google+', 'width=900,height=900');
				w.focus();
				/*w.resizeTo(500,500);*/
			}
			
		
			function opentwitter(){
				w=window.open('https://twitter.com/intent/tweet?original_referer=http%3A%2F%2Fwww.dzyngiri.com%2Fdesign-an-awesome-css3-search-box%2F&text=Design%20An%20Awesome%20CSS3%20Search%20Box%20-%20Dzyngiri&tw_p=tweetbutton&url=http%3A%2F%2Fwww.dzyngiri.com%2Fdesign-an-awesome-css3-search-box%2F&via=dzyngiri','twitter',              'width=500,height=400');
				w.focus();
				/*w.resizeTo(500,500);*/
			}
			
			
        
			function opentimbler(){
				w=window.open('https://www.tumblr.com/login','timbler','width=500,height=500');
				w.focus();
				/*w.resizeTo(500,500);*/
			}
                        
                         
                        $(document).ready(function(){

                                   $("#slider a").first().show();

                                        var index = 0;
                                        var count = 5;

                                        function bannerRotator() {
                                            $('#slider a').delay(4300).eq(index).fadeOut(function() { 
                                                if (index === count){
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
                                             <li><a href="../index.php">Home</a></li>
                                             <li><a href="../courses/courses.html" >Courses </a></li>    
                                             <li><a href="../video/video.php">Videos</a></li>
                                             <li><a href="../tutorial/tut.php">tutorials</a></li>
                                           </ul>

                                 <div class="hr2"><hr /></div>
                               </div>

                                 <br></br>
                                 
                             </div>
                        <br></br>
             </header>

<div class="hr"><hr /></div> 
        <div id="contact-form" > 
            <h1 align="center" > BOOKS </h1>
        </div> 




        <div class="b1">

            

            <div align="left">
               
                
                <h2 style="margin-left: 60px;"><i><b><u>UPLOAD</u></b></i></h2>
                <form action="upload.php" method="post" enctype="multipart/form-data" align="left" style="margin-left: 60px;">
                                    
                    <label for="fi">Filename:</label>
                    <input type="file" name="file" id="file" /><br />
                    <INPUT TYPE="submit" name="submit" value="submit" />
                </form> 
                 <form id="search1" action="get1.php?search=&id=books" method="post" align="center">
                    <input type="text" name="search_text" id="search_b" onkeyup="showHint(this.value)"value="" style="width: 300px; background:#CECECE;"/>
                    <input type="submit" style="margin-left: 50px;"name="search_box" value="Search books "
					style="width:300px;height:100px;" onclick="search(document.getElementById('search_b').value);">
                </form>
            </div>

            <div align="center" >
               
                <p>Suggestions: <span id="txtHint"></span></p>
				
				
				<div id="middlefield">


<div class="corners" style="width: 1250px;height: 1200px; background-image: url('../images/25.jpg'); ;margin-left: 50px; margin-top: 50px; "> 
<p></p>
<p style="text-align:center;
font-size:40px">Reference books</p>
<br></br>
				
                    <?php
// Create connection
//require 'php/connect_database.php';
// Check connection
                    $mysql_host = 'localhost';
                    $mysql_username = 'root';
                    $mysql_password = '';
                    $mysql_err = 'Not able to load the page';
                    $mysql_err2 = 'Could not connect';
                    $mysql_database = 'test';

                    if (!mysql_connect($mysql_host, $mysql_username, $mysql_password) || !mysql_select_db($mysql_database)) {
                        die($mysql_err2);
                    }
                    $str = "SELECT * FROM pdf";
                    $rs = mysql_query($str);
                    
				
$k=0;

$rs = mysql_query($str);
$ul="";
$likes="";
$shots="";
$i=0;
$tags="";
$url="";
$j=0;
$ul='<ul style="display: inline">';
echo $ul;
while($row = mysql_fetch_array($rs))
{    $url=$row['url'];
$shots=$row['shots'];
$tags=$row['tags'];
$likes=$row['likes'];



$k=$k+1;
echo '
<li style="display: inline-block">
<div class="corners" style="background-color: #F2F2F2;width: 265px;height:310px;margin-left:30px;"> ';
  

 
echo $url;
                        echo '<a href="download3.php?file=
						'.$url. '">';
                        echo '<img src="images/'.$shots.'"
                          style="width: 265px;height: 185px;"/> </a>';
   
						
   echo'                 
<p  style="color: #000; font-size: 18px;">'.$tags.'</p>';

echo'<p></p>';

echo  '<font size="4" color="#000">Likes &nbsp; &nbsp; &nbsp '.$likes.'</font>';

echo '
</div>

</li>  ';

$i++;

if($i%3==0&&$i>2)
{
echo"</ul>";
echo "<br>";
echo"<br>";
echo '<ul style="display: inline">';
}}

echo"</ul>";

?>


</div>

</div>

<br></br>
<br></br>
<br></br>

                    
                    
                    


        

<!-- footer .......................................................................................................................-->
<footer style="overflow: hidden">
  <div class="footer" > 
       <div class="menu2">
        <ul>
          <li><a href="../index.html" >Home</a></li>
          <li><a href="../about-us/about-us.html">About Us</a></li>
          <li><a href="../Complaint-form/complaintForm.html">Complaints</a></li> 
          <li><a href="../books/book.php" class="active">Books</a></li>
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
              <li> <a href="../Rssfeeds/rssfeed.html"><img src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/96/Web-RSS-Feed-Metro-icon.png" width="30" height="30" border="0"/></a></li>
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
            $('.js-popup').on('click', function () {
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
                            $('#status').html( 'You picked ' + $('input:radio[name=rating]:checked').val() );
                        }
                    });
                });    
                
            function dim(){
                var x= document.getElementById("mid_blog_id");
                x.style.display="none";
                var y= document.getElementById("aboutus");
                y.style.display="block";

            }
         </script>
   
        </div>
    </body>
</html>












