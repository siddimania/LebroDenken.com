
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <link rel="icon" href="../images/Preview-icon.png" /> 
    	<title> LiberoDenken.com </title>
    	<link href="../css/style.css"rel="stylesheet" type="text/css" />
	<link href="css/style.css"rel="stylesheet" type="text/css" />
        <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
        
        <link href='http://fonts.googleapis.com/css?family=Domine' rel='stylesheet' type='text/css'>
        
        <link href='http://fonts.googleapis.com/css?family=Sonsie+One' rel='stylesheet' type='text/css'>
        
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
         <link type="text/css" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1/themes/redmond/jquery-ui.css" rel="stylesheet" />
         <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jqueryui/1/jquery-ui.min.js"></script>
         
         <script type="text/javascript" src="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/jquery.magnific-popup.js"></script>
            <link type="text/css" href="https://rawgithub.com/dimsemenov/Magnific-Popup/master/dist/magnific-popup.css" rel="stylesheet" />
	
               
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
        
        
        
</head>


<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" >
<!-- Header of the site-->
<?php

    require '../php/connect.inc.php';
?>

<header>
  <div class="mainhead">
        <div class="logo" >
            <a href="index.html"><img src="../images/website_icon.png" width="500" height="150" border="0"/></a>
       
        </div>
     
  </div>
</header>

<div class="hr"><hr /></div> 


<br></br>
<div id="middlefield">
    
            <div id="contact-form" > 
                <h1 align="center"> </h1>
            </div>
    
    <div class="course_updates" style="width: 1720px;height:1300px; margin-bottom: 2px;"> 
                                   <div class="popular_course" style="height: 1200px; background-color: #126180;"> 
                                        <div class="popular_course" align="left" style="margin-top: 1px;  width:1000px;  height:60px; background-color: #126180;"><h1>INTRODUCTION</h1> </div>

                                            <div align="center" class="popular_course" style="margin-top: 5px;background-color: #F2F2F2;width: 1100px; height : 400px;"> 

                                                   <p align="left" style=" margin-left: 30px;font-size: 33px;font-weight: 200;color: #1b7fcc;font-family: 'Domine', serif;">

                                                       <!--Book name -->
                                                           <?php
                                                                if(isset($_GET['course'])){
                                                                    $course=$_GET['course'];
                                                                            
                                                                            echo $course;
                                                                            echo " :";
                                                                            echo "<br>";
                                                                            
                                                                            $sql=  mysql_query("SELECT * FROM introductionpagetag where tag='$course'") ;
                                                                            $row = mysql_fetch_array($sql);
                                                                            echo $row['introduction'];
                                                                                 
                                                                      
                                                                   }
                                                               ?>

                                                   </p>
                                          </div>  
                                         <div class="popular_course" align="left" style="margin-top: 1px;  width:1000px;  height:60px;background-color: #126180;"><h1>Related Videos </h1> </div>

<div align="left" class="popular_course" style="margin-top: 5px;background-color: #F2F2F2;width: 1100px; height : 250px;"> 

<p  style="color: #000; font-size: 20px;">
<?php

// Create connection
$dbhandle = mysql_connect('localhost', 'root', '')
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("test",$dbhandle) // "database1" is the database name
or die("Could not select database1");

//$key = $_POST['id'];
            $search = urldecode($_GET['course']);

            $strsql = "SELECT * FROM popvideo WHERE videoName LIKE '%" . $search . "%';";
			            $rs = mysql_query($strsql) or die(mysql_error());

$k=0;

//$rs = mysql_query($str);
$ul="";
$likes="";
$rating="";
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
$tags=$row['videoName'];
$likes=$row['likes'];




if($k<3)
{$k=$k+1;
echo '
<li style="display: inline-block">
<div class="corners" style="background-color: #F2F2F2;width: 200px;height:120px;margin-left:30px;"> 
<a class="youtube" href="'.$url.'" title="'.$tags.'"><img src="../images/video/'.$shots.'" style="width: 200px;height: 105px;"/> </a>
<p  style="color: #000; font-size: 18px;">'.$tags.'</p>';

echo"<p></p>";
echo "<p>";
echo  '<font size="4" style="margin-left:10px;margin-top:20px;margin-bottom:20px;"color=#000>Likes &nbsp; &nbsp; &nbsp '.$likes.'</font>';
echo "</p>";
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
}}}

echo"</ul>";





?>

   

</p>
</div>  
<br></br>
<br></br>
<div class="popular_course" align="left" style="margin-top: 1px;  width:1000px;  height:60px; background-color: #126180;"><h1>Recommended Books</h1>
<br></br> </div>

<div align="left" class="popular_course" style="margin-top: 5px;background-color: #F2F2F2;width: 1100px; height : 250px;"> 

<p  style="color: #000; font-size: 20px;">

 <?php
 
  // connect database to pdf
  mysql_connect("localhost","root","") or die(mysql_error());
  mysql_select_db("test") or die(mysql_error());
 
  $conn = mysql_connect("localhost", "root", ""); 

  mysql_select_db("test"); 
  
  $search=urldecode($_GET['course']);
 // echo $search;
 // echo $key;
  $k=0;
  $str= "SELECT * FROM pdf WHERE tags LIKE '%".$search."%';"; 
  
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


if($k<3)
{$k=$k+1;
echo '
<li style="display: inline-block">
<div class="corners" style="background-color: #F2F2F2;width: 180px;height:135px;margin-left:30px;"> ';
 

                        echo '<a href="download3.php?file='.$url.'">';
 echo '<img src="../books/images/'.$shots.'"
                          style="width: 180px;height: 120px;"/> </a>';
   
						
   echo'                 
<p  style="color: #000; font-size: 14px;">'.$tags.'</p>';



echo  '<br><font size="3" color="#000"> &nbsp; &nbsp;Likes &nbsp; &nbsp; &nbsp '.$likes.'</font></br>';

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
}}}

echo"</ul>";

?>

   

</p>
</div>  
</div>   
                                     <div class="updates" align="center" style="height: 1200px;background-color: #126180;"> 
                                         <h2 style="font-size:20px;  ">COURSE CONTENT</h2>
                                         <div class="corners" style="background-color: #F2F2F2;width: 350px; height: 600px;"> 
                                                    
                                             <?php
                                                            $sql3=  mysql_query("SELECT * FROM phpinstruction where tag='$course'");
                                                            echo "<p style=\"margin-bottom:10px;\"></p>";
                                                                   
                                                            while($result3=mysql_fetch_array($sql3)){
                                                                    
                                                                    echo "<p align=\"left\" style=\" margin-left: 10px;margin-top:60px;font-size: 15px;font-weight: 200;color: #1b7fcc;font-family: 'Domine', serif;\">";

                                                                        echo $result3['instruction'];

                                                                    echo "</p>";
                                                                    
                                                                   

                                                            }
                                              ?>               
                                        </div>
                                         <h2 style="font-size:20px;  ">AUTHOR</h2>
                                        <div class="corners" style="background-color: #F2F2F2;width: 350px;height:300px; "> 
                                                    <?php
                                                            
                                                            echo "<p style=\"margin-top:10px\"></p>";
                                                           
                                                           $sql5=  mysql_query("SELECT * FROM introductionpagetag where tag='$course'") ;
                                                                            $row5 = mysql_fetch_array($sql5);
                                                                    
                                                                    echo "<p align=\"center\" style=\" margin-left: 10px;margin-right: 10px;font-size: 30px;font-weight: 70;color: #1b7fcc; font-family: 'Domine', serif;\">";

                                                                        echo $row5['authorName'];

                                                                    echo "</p>";
                                                                     echo "<p align=\"left\" style=\" margin-left: 10px;margin-right: 10px;font-size: 19px;font-weight: 70;color: #1b7fcc; font-family: 'Domine', serif;\">";

                                                                        echo $row5['author'];

                                                                    echo "</p>";

                                                           
                                              ?>               
                                         </div>
                                         <br>
                                          <div class="corners" style="background-color: #F2F2F2;width: 350px;height:100px; "> 
                                                    <?php
                                                            
                                                            $sql2=  mysql_query("SELECT * FROM courses where tag='$course'");
                                                            $row2 = mysql_fetch_array($sql2);
                                                            $rating=$row2['rating'];
                                                            $likes=$row2['likes'];
                                                        echo '<li style="display: inline-block">
                          
                                                                        <p class="js-popup'.$course.'"  ><a href="#" style="margin: 0px;font-size: 20px;color: #000;text-decoration: none;">';

                                                                         echo'Reviews &nbsp;</a>';

                                                                         for ($j = 0; $j < $rating; $j++) {

                                                                            echo ' <img width="20px" height="20px" src="../images/star.png" alt="unable to load" />';
                                                                           } 
                                                                          echo'</p>'; 
                                                                         echo  '&nbsp;&nbsp; <font size="5" color=#000>Likes &nbsp; &nbsp; &nbsp; '.$likes.'</font>

                                                                    </li>  ';
                                                    ?>               
                                         </div>
                                          
                                     </div>       
                         </div>  
    
                   
</div>

<div class="hr"><hr /></div>


<!-- footer .......................................................................................................................-->
<footer style="overflow: hidden">
  <div class="footer" > 
       <div class="menu2">
        <ul>
          <li><a href="index.html" >Home</a></li>
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
              <li> <img src="../images/google-plus-icon.png" width="30" height="30" border="0" onclick="opengmailplus();"/></li>
              <li> <img src="../images/twitter-icon.png" width="30" height="30" border="0" onclick="opentwitter();"/></li>
              <li> <a href="Rssfeeds/rssfeed.html"><img src="http://icons.iconarchive.com/icons/dakirby309/windows-8-metro/96/Web-RSS-Feed-Metro-icon.png" width="30" height="30" border="0"/></a></li>
              <li> <img  id="last_icon" src="../images/tumblr-icon.png" width="30" height="30" border="0" onclick="opentimbler();"/></li>
             
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
            $('.js-popupphp').on('click', function () {
                    $.magnificPopup.open({
                        items: {
                            src: '<div class="white-popup"><div id="status">Review It</div><form action="php/phpPageRating1.php" method="get" style="margin-left:150px;" id="ratingForm"><fieldset class="rating"><legend>Please rate:</legend><input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label><input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label><input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label><input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label><input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label></fieldset><div class="clearfix"></div><button class="submit clearfix">Submit</button></form></div>',
                            type: 'inline'
                        }
                    });
                });
                
                $('.js-popupajax').on('click', function () {
                    $.magnificPopup.open({
                        items: {
                            src: '<div class="white-popup"><div id="status">Review It</div><form action="php/phpPageRating2.php" method="get" style="margin-left:150px;" id="ratingForm"><fieldset class="rating"><legend>Please rate:</legend><input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label><input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label><input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label><input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label><input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label></fieldset><div class="clearfix"></div><button class="submit clearfix">Submit</button></form></div>',
                            type: 'inline'
                        }
                    });
                });
                
                 $('.js-popuphtml').on('click', function () {
                    $.magnificPopup.open({
                        items: {
                            src: '<div class="white-popup"><div id="status">Review It</div><form action="php/phpPageRating3.php" method="get" style="margin-left:150px;" id="ratingForm"><fieldset class="rating"><legend>Please rate:</legend><input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label><input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label><input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label><input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label><input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label></fieldset><div class="clearfix"></div><button class="submit clearfix">Submit</button></form></div>',
                            type: 'inline'
                        }
                    });
                });
                
                  $('.js-popupcss').on('click', function () {
                    $.magnificPopup.open({
                        items: {
                            src: '<div class="white-popup"><div id="status">Review It</div><form action="php/phpPageRating4.php" method="get" style="margin-left:150px;" id="ratingForm"><fieldset class="rating"><legend>Please rate:</legend><input type="radio" id="star5" name="rating" value="5" /><label for="star5" title="Rocks!">5 stars</label><input type="radio" id="star4" name="rating" value="4" /><label for="star4" title="Pretty good">4 stars</label><input type="radio" id="star3" name="rating" value="3" /><label for="star3" title="Meh">3 stars</label><input type="radio" id="star2" name="rating" value="2" /><label for="star2" title="Kinda bad">2 stars</label><input type="radio" id="star1" name="rating" value="1" /><label for="star1" title="Sucks big time">1 star</label></fieldset><div class="clearfix"></div><button class="submit clearfix">Submit</button></form></div>',
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
 
</body>
</html>

