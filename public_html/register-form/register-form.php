<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    
<head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>LiberoDenken.com</title>
        
    	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
    	<script type="text/javascript" src="js/coin-slider.js"></script>
       
    	
        <link rel="stylesheet" href="css/coin-slider-styles.css" type="text/css" />
    	
        <link href="css/style2.css"rel="stylesheet" type="text/css" />
         <link href="css/style.css"rel="stylesheet" type="text/css" />
        <script>
            function myfirstname(){
                    var status = document.getElementById("first_name_status");
                    var u = document.getElementById("first_name").value;
                     //document.write(u);
                    //windows.alert (u);
                    if(u != ""){
                            status.innerHTML = 'checking field......';
                            var hr = new XMLHttpRequest();
                            hr.open("POST","php/ajaxchecking.php", true);
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            hr.onreadystatechange = function() {
                                    if(hr.readyState == 4 && hr.status == 200) {
                                            status.innerHTML = hr.responseText;
                                    }
                            }
                        var v = "firstname="+u;
                        hr.send(v);
                    }
            }
            
            function mylastname(){
                    var status = document.getElementById("last_name_status");
                    var u = document.getElementById("last_name").value;
                     //document.write(u);
                    //windows.alert (u);
                    if(u != ""){
                            status.innerHTML = 'checking field......';
                            var hr = new XMLHttpRequest();
                            hr.open("POST","php/ajaxchecking.php", true);
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            hr.onreadystatechange = function() {
                                    if(hr.readyState == 4 && hr.status == 200) {
                                            status.innerHTML = hr.responseText;
                                    }
                            }
                        var v = "lastname="+u;
                        hr.send(v);
                    }
            }
            
            function myemailname(){
                    var status = document.getElementById("email_status");
                    var u = document.getElementById("email_name").value;
                     //document.write(u);
                    //windows.alert (u);
                    if(u != ""){
                            status.innerHTML = 'checking field......';
                            var hr = new XMLHttpRequest();
                            hr.open("POST","php/ajaxchecking.php", true);
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            hr.onreadystatechange = function() {
                                    if(hr.readyState == 4 && hr.status == 200) {
                                            status.innerHTML = hr.responseText;
                                    }
                            }
                        var v = "email="+u;
                        hr.send(v);
                    }
            }
            function mypasswordname(){
                    var status = document.getElementById("password_status");
                    var u = document.getElementById("password_name").value;
                     //document.write(u);
                    //windows.alert (u);
                    if(u != ""){
                            status.innerHTML = 'checking field......';
                            var hr = new XMLHttpRequest();
                            hr.open("POST","php/ajaxchecking.php", true);
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            hr.onreadystatechange = function() {
                                    if(hr.readyState == 4 && hr.status == 200) {
                                            status.innerHTML = hr.responseText;
                                    }
                            }
                        var v = "password="+u;
                        hr.send(v);
                    }
            }
            
            function strcmp (str1, str2) {
  
                    return ((str1 == str2) ? 0 : ((str1 > str2) ? 1 : -1));
                }
                
                
               
              
             function myconfirmname(){
                    var status = document.getElementById("confirm_password_status");
                    var password=document.getElementById("password_name").value;
                    var confirmpassword = document.getElementById("confirm_name").value;
                    var d=strcmp(password,confirmpassword);
                    if(d==0){
                            status.innerHTML = 'checking field......';
                            var hr = new XMLHttpRequest();
                            hr.open("POST","php/ajaxchecking.php", true);
                            hr.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
                            hr.onreadystatechange = function() {
                                    if(hr.readyState == 4 && hr.status == 200) {
                                            status.innerHTML = hr.responseText;
                                    }
                            }
                        var v = "confirmpassword="+confirmpassword;
                        hr.send(v);
                        
                    }
                    else 
                        status.innerHTML="Not matched";
                    
            }
            
        </script>
</head>

<body leftmargin="0" rightmargin="0" topmargin="0" bottommargin="0" background="images/bg-start.jpg" >
    
  <div style="background-image: url('images/bg-start.jpg') ;"  >    
            <div class="head">
                <h1> LiberoDenken.com </h1>
            </div>  

            <div id="contact-form" > 
                <h1 align="center"> Register Form</h1>
            </div>

            <div class="container" >
                <section class="register">
                 
                  <form method="post" action="index.html">
                    <div class="reg_section personal_info">
                    <h3>Personal Information</h3>
                    <input type="text" name="username" value="" placeholder="Your Desired Username">
                        <span id="first_name_status" style="color: #E6E6E6"></span>
                    <input type="text" name="email" value="" placeholder="Your E-mail Address">
                    </div>
                    <div class="reg_section password">
                    <h3>Your Password</h3>
                    <input type="password" name="password" value="" placeholder="Your Password">
                    <input type="password" name="confirm" value="" placeholder="Confirm Password">
                    </div>
                              <p style="margin-left: 100px;" align ="center">

                                  <?php 
                                           echo "<p> Captcha </P>";   
                                           require_once('php/recaptchalib.php');
                                           $publickey = "6LdNXekSAAAAAAIZxmom-M09NJdORkq8XdxnWpel"; 
                                           echo recaptcha_get_html($publickey);

                                  ?>
                              </p>
                        <br>
                    <p class="submit"><input type="submit" name="commit" value="Sign Up"></p>
                  </form>
                </section>
              </div>
        
    </div> 
</body>
</html>
