<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html >
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>LiberoDenken.com</title>



<link href="../css/style.css" rel="stylesheet" type="text/css" />
<style>
.b1
{
width:100%;
height:1500px;

}
.SEARCH_B
{
}
.theimg{
height: 20px;
width: 20px;}	

</style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="../js/coin-slider.js"></script>
<script>
function showHint(str)
{
var xmlhttp;
if (str.length==0)
{ 
document.getElementById("txtHint").innerHTML="";
return;
}
if (window.XMLHttpRequest)
{// code for IE7+, Firefox, Chrome, Opera, Safari
xmlhttp=new XMLHttpRequest();
}
else
{// code for IE6, IE5
xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
}
xmlhttp.onreadystatechange=function()
{
if (xmlhttp.readyState==4 && xmlhttp.status==200)
{
document.getElementById("txtHint").innerHTML=xmlhttp.responseText;
}
}
xmlhttp.open("GET","new.php?q="+str,true);
xmlhttp.send();
}
</script>


<link rel="stylesheet" href="../css/coin-slider-styles.css" type="text/css" />
<link href="../css/style.css"rel="stylesheet" type="text/css" />







<!--apply of java script-->


<script type="text/javascript">
function search(key){
document.getElementById("search1").action="get1.php?search="+key+"&id=videos";
document.getElementById("search1").method = "post";
document.getElementById("search1").submit();

}
</script></head>
<!------start of video code from here----------->
<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" >

<header>
<div class="mainhead">
<div class="logo" >
<a href="index.html"><img src="../images/website_icon.png" width="500" height="150" border="0"/></a>
<div class="login" >
                <ul>
                    <form action="php/index.php" method="post">
                    <li><input type="submit" value="LOG IN" style="color:#F2F2F2; "/></li>
                    <li><p>&nbsp;<p></li>
                    <li><input type="password" value="" name="password" id="password" size="25"/></li>
                    <li><p>&nbsp;<p></li>
                    <li><p>&nbsp;<p></li>
                    <li><p style="color:#939393"> PASSWORD : </p></li>
                    <li><p>&nbsp;<p></li>
                    <li><p>&nbsp;<p></li>
                    <li><input type="text" value="" name="email" id="username" size="25"  /></li>
                    <li><p>&nbsp;<p></li>
                    <li><p>&nbsp;<p></li>
                    <li><p style="color:#939393"> EMAIL : </p></li>
                    <li><p>&nbsp;<p></li>
                    </form>
                    <div class="signup" align="right">
                        <a href='register-form/register-form.php'>
                           <input type="button" value="SIGN UP" id="Signup_id" style="color:#F2F2F2; size:14px "/></a>
                    </div>
                </ul>
              </div>

</div>

  
<div class="menu" align="center">
<ul>
<li><a href="../index.php" class="active">Home</a></li>
<li><a href="../courses/courses.php" class="panel">Courses </a></li>    
<li><a href="../video/video.php">Videos</a></li>
<li><a href="../tutorial/tut.php">tutorials</a></li>
</ul>

<div class="hr2"><hr /></div>
</div>

<br></br>

</div>
<br></br>

</header>
<!--
<div class="hr"><hr /></div> 
<div id="contact-form" > 
<br></br>
<h1 align="center" > Videos </h1>
</div>-->
<div class="hr"><hr /></div> 
<div id="contact-form" > 
<br></br>
<h1 align="center" > Videos </h1>
</div> 





<div class="b1">

<div align="center" >
<form id="search1" action="get1.php?search=&id=videos" method="post">
<input type="text" name="search_text" id="search_b" onkeyup="showHint(this.value)"value="" style="width: 300px; background:#CECECE;"/>
<input type="submit" name="search_box" value="Search video " onclick="search(document.getElementById('search_b').value);">
</form>
<p>Suggestions: <span id="txtHint"></span></p>
<div id="middlefield">


<div class="corners" style="width: 1350px;height: 1250px; margin-left: 50px; background-image: url('../images/21.jpg');margin-top: 50px; "> 
<p></p>
<p style="text-align:center;
font-size:40px">Lecture Videos</p>
<br></br>
<?php

// Create connection
$dbhandle = mysql_connect('localhost', 'root', '')
or die("Unable to connect to MySQL");
//echo "Connected to MySQL<br>";

//select a database to work with
$selected = mysql_select_db("test",$dbhandle) // "database1" is the database name
or die("Could not select database1");

//$key = $_POST['id'];
            $search = urldecode($_GET['search']);

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



$k=$k+1;
echo '
<li style="display: inline-block">
<div class="corners" style="background-color: #F2F2F2;width: 350px;height:289px;margin-left:30px;"> 
<a class="youtube" href="'.$url.'" title="'.$tags.'"><img src="../images/video/'.$shots.'" style="width: 350px;height: 182px;"/> </a>
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
<li><a href="index.html" class="active">Home</a></li>
<li><a href="../about-us/about-us.html">About Us</a></li>
<li><a href="../Complaint-form/complaintForm.html">Complaints</a></li>
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

