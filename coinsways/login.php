<?php
session_start();
include('webconfig.php');

if(isset($_SESSION['user'])!="")
{
  header("Location: login.php");
}


if(isset($_POST['btn-login']))
{
  $email = mysql_real_escape_string($_POST['email']);
  $upass = mysql_real_escape_string($_POST['pass']);

     $res3=mysql_query("SELECT * FROM tbl_user WHERE email_id='$email'");
      $row=mysql_fetch_array($res3);
       if($row['password']==($upass)) {

        $_SESSION['ad_id'] = $row['ad_id'];
        $_SESSION['user_name'] = $row['user_name'];
        $_SESSION['email_id'] = $row['email_id'];
        $_SESSION['mobile_no'] = $row['mobile_no'];
        header("Location: admin/index.php");
       }
     else
        {
       
        ?>
    <script>
       alert('Wrong details Email and password');
        window.location.href='login.php';
        </script>
    <?php
    } 
  } 
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	login::COINSWAYS
</title>
<?php include 'head.php'; ?>
</head>
<body>
    
<script type="text/javascript">
//<![CDATA[
var theForm = document.forms['aspnetForm'];
if (!theForm) {
    theForm = document.aspnetForm;
}
function __doPostBack(eventTarget, eventArgument) {
    if (!theForm.onsubmit || (theForm.onsubmit() != false)) {
        theForm.__EVENTTARGET.value = eventTarget;
        theForm.__EVENTARGUMENT.value = eventArgument;
        theForm.submit();
    }
}
//]]>
</script>

        


    <style type="text/css">
        .header .h_bottom {
    position: relative;
    color: #fff;
    background: #262626;
    margin-top: 114px;
    min-height: 0px; 
}
.header .h_bottom
{
    height:0px;}


.main-login
{
     min-height: 450px;}
    </style>
<?php include 'header1.php'; ?>

        <div id="main-other">
    <div id="sub-other">
    	<div class="other-head">
        	<h1>User Log In</h1>
        </div>
    </div>
</div>

<section class="main-login">
<div class="container">
<div class="fgrt">
<div class="right-box">
           <h2><strong>Bits Pay U</strong> Sign In Form</h2>
           <div class="description">
                <p>
                    Manage all your trade from your account panel. 
	                            	24x7 security of your account online by <a href="/"><strong>leading</strong></a>, online security provider!
                            
                </p>
            </div>
            <div class="sign-in">
                    <a href="Forget-Password.php">Forget Password <i class="fa fa-key"></i></a>
                    
                    <a href="registration.php">Register <i class="fa fa-fw fa-unlock-alt"></i></a>
                    </div>
        </div>
<div class="left-box">
            <div class="box-head">
            <div class="form-top">
            	<div class="form-top-left">
                    <h3>Sign In now</h3>
                    <p>Fill in the form below to get instant access: <br>
                           <span id="infolbl"> </span>
                    </p>
                </div>

                <div class="form-top-right">
                    <i class="fa fa-pencil"></i>
                </div>
            </div>
            
            <div class="all-types">
            	<div class="boxes">
                <form method="POST">
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="img/user.png">
                        </div>
                        <div class="info-type">
                 <input name="email" type="email"  placeholder="Email Id" />
                            <span id="ctl00_ContentPlaceHolder1_req2" style="color:Red;display:none;">Email Required</span>
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="img/pass.png">
                        </div>
                        <div class="info-type">
                        	<input name="pass" type="password"  placeholder="Password" />
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;">Password Required</span>
                        </div>
                    </div>

                    <div class="sign-in">
                    <input type="submit" name="btn-login" value="Sign IN" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnlogin&quot;, &quot;&quot;, true, &quot;a&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnlogin" />
                    </div>
                </div>
                </from>
            </div>

            
        </div>
</div>
</div>
</section>


    </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_ContentPlaceHolder1_req2"), document.getElementById("ctl00_ContentPlaceHolder1_RequiredFieldValidator1"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_ContentPlaceHolder1_req2 = document.all ? document.all["ctl00_ContentPlaceHolder1_req2"] : document.getElementById("ctl00_ContentPlaceHolder1_req2");
ctl00_ContentPlaceHolder1_req2.controltovalidate = "ctl00_ContentPlaceHolder1_txtmail";
ctl00_ContentPlaceHolder1_req2.errormessage = "Email Required";
ctl00_ContentPlaceHolder1_req2.display = "Dynamic";
ctl00_ContentPlaceHolder1_req2.validationGroup = "a";
ctl00_ContentPlaceHolder1_req2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_req2.initialvalue = "";
var ctl00_ContentPlaceHolder1_RequiredFieldValidator1 = document.all ? document.all["ctl00_ContentPlaceHolder1_RequiredFieldValidator1"] : document.getElementById("ctl00_ContentPlaceHolder1_RequiredFieldValidator1");
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.controltovalidate = "ctl00_ContentPlaceHolder1_txtpswd";
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.errormessage = "Password Required";
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.display = "Dynamic";
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.validationGroup = "a";
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_RequiredFieldValidator1.initialvalue = "";
//]]>
</script>


<script type="text/javascript">
//<![CDATA[

var Page_ValidationActive = false;
if (typeof(ValidatorOnLoad) == "function") {
    ValidatorOnLoad();
}

function ValidatorOnSubmit() {
    if (Page_ValidationActive) {
        return ValidatorCommonOnSubmit();
    }
    else {
        return true;
    }
}
        //]]>
</script>
</form>
     <?php include 'footer.php'; ?> 
</body>
</html>
