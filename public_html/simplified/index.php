 +  <!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6 lt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7 lt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8 lt8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html lang="en" class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="UTF-8" />
        <!-- <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">  -->
        <title>Dominos Coupons - Jiit Simplified</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <meta name="author" content="Codrops" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style3.css" />
        <link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
                
        <script>
            function myfirstname(){
                    var status = document.getElementById("first_status");
                    var u = document.getElementById("fname").value;
                    if(u !== ""){             
                            status.innerHTML = 'checking first name ......';
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
            
             function myenroll(){
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
            
            
             function mybranch(){
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
            
            
            function myemail(){
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
            
            function mypassword(){
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
                
                
               
              
             function myconfirm(){
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
    <body>
        <div class="container">
            <br><br>
            <header>
                <h1>Dominos Coupon - <span>Jiit Simplified</span></h1>
				
            </header>
            <section>				
                <div id="container_demo" >
                    
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
                            <form method="post"  action="php/login.php" autocomplete="on" > 
                                <h1>Log in</h1> 
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your email or username </label>
                                    <input id="username" name="username" required type="text" placeholder="myusername or mymail@mail.com"/>
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required type="password" placeholder="eg. X8df!90EO" /> 
                                </p>
                                <p class="login button"> 
                                    <input type="submit" value="Login" /> 
				</p>
                                 <p class="login button" > 
                                    <input type="submit" value="Forgot Password ?" style="font-size: 21px;" /> 
				</p>
                                <p class="change_link">
                                    Not a member yet ?
                                    <a href="#toregister" class="to_register">Join us</a>
				</p>
                            </form>
                        </div>

                        <div id="register" class="animate form">
                            <form  action="php/registerform.php" autocomplete="on" method="post"> 
                                <h1> Sign up </h1> 
                                <p> 
                                    <label for="fusernamesignup" class="fname" data-icon="u">First name</label>
                                    <input id="fname" name="firstname" required type="text" placeholder="myfirstusername690"  onblur="myfirstname()"/>
                                    <span id="first_status" style="color: #E6E6E6"></span>
                                </p>
                                <p> 
                                    <label for="lusernamesignup" class="lname" data-icon="u">Last name</label>
                                    <input id="lname" name="lastname" required type="text" placeholder="mylastusername690" />
                                </p>
                                <p> 
                                     <label for="enrollno" class="enroll" data-icon="u">Enroll No.</label>
                                    <input id="enroll" name="userenroll" required type="text" placeholder="enrollment no"  />
                                </p>
                                <p> 
                                     <label for="yourbranch" class="ybranch" data-icon="u">Branch</label>
                                    <input id="branch" name="userbranch" required type="text" placeholder="B.Tech-(CSE,ECE,IT,BIOTECH),M.Tech(CSE,ECE)" />
                                </p>
                                <p> 
                                    <label for="emailsignup" class="youmail" data-icon="e" > Your email</label>
                                    <input id="emailsignup" name="emailsignup" required type="email" placeholder="mysupermail@mail.com" /> 
                                </p>
                                <p> 
                                    <label for="passwordsignup" class="youpasswd" data-icon="p">Your password </label>
                                    <input id="passwordsignup" name="passwordsignup" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                <p> 
                                    <label for="passwordsignup_confirm" class="youpasswd" data-icon="p">Please confirm your password </label>
                                    <input id="passwordsignup_confirm" name="passwordsignup_confirm" required type="password" placeholder="eg. X8df!90EO" />
                                </p>
                                
                                
                                
                            <p style="margin-left: 100px;">
                                
                                <?php 
                                         echo "<p> Captcha </P>";   
                                         require_once('php/recaptchalib.php');
                                         $publickey = "6LdNXekSAAAAAAIZxmom-M09NJdORkq8XdxnWpel"; 
                                         echo recaptcha_get_html($publickey);
                                      
                                ?>
                            </p>

                                
                                <p class="signin button"> 
                                    <input type="submit" value="Sign up"/> 
				</p>
                                
                                <p class="change_link">  
                                    Already a member ?
                                   <a href="#tologin" class="to_register"> Go and log in </a>
				</p>
                            </form>
                            
                        </div>
                        
						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>