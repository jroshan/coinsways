<?php
include('webconfig.php');

if(isset($_POST['regg'])) 
{
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$bitcon = $_POST['bitcon'];
$number = $_POST['number'];

$a = '';
for ($i = 0; $i<5; $i++) 
{
    $a .= mt_rand(0,9);
}
$useid = $a;



$docins = "INSERT INTO tbl_user(ad_id,user_name,email_id,password,mobile_no,bitcan_wellet,user_ram_no) 
VALUES (NULL,'$name','$email','$password','$number','$bitcon','$useid')";

$msg = mysql_query($docins);
if($msg){
?>
<script>
alert('Submited Informaation Successfully');
window.location.href='registration.php';
</script>
<?php

}
}
?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">
<head><title>
	COINSWAYS
</title>
<?php include 'head.php'; ?>
</head>
<body>
  <style type="text/css">
        .header .h_bottom {
            position: relative;
            color: #fff;
            background: #262626;
            margin-top: 114px;
            min-height: 0px;
        }

        .header .h_bottom {
            height: 0px;
        }


        .main-login {
            min-height: 650px;
        }
    </style>


    <div id="main-other">
        <div id="sub-other">
            <div class="other-head">
                <h1>User Registration In</h1>
            </div>
        </div>
    </div>

    <section class="main-login">
<div class="container">
<div class="fgrt">
<div class="right-box">
           <h2><strong>BTCIQT</strong> Registration Form</h2>
           <div class="description">
                <p>
                    BTCIQT Makes it easier to trade "BTCIQT" for common people.
                </p>
               <br />
               <span>BTCIQT is a trading platform for common people, Since BTCIQT trading is strenuous and required 24x7 trading watch. It is not effortlessly practicable for common people to trade "BTCIQT".</span>
               <br />
               <span>
                   BTCIQT has developed infrastructure and appointed diverse team of Financial Trading Experts who work 24x7 and trade your "BTCIQT" 24x7.
               </span>
               <br />
            </div>
            <div class="sign-in">
                    <a href="Forget-Password.php">Forget Password <i class="fa fa-key"></i></a>
                    
                    <a href="login.php">Sign In <i class="fa fa-fw fa-unlock-alt"></i></a>
                    </div>
        </div>
<div class="left-box">
            <div class="box-head">
            <div class="form-top">
            	<div class="form-top-left">
                    <h3>Register now</h3>
                    <p>Fill in the form below to get instant access: <br>
                           <span id="infolbl"> </span>
                    </p>
                </div>

                <div class="form-top-right">
                    <i class="fa fa-pencil"></i>
                </div>
            </div>
            <div class="all-types">
            <form method="POST">
            	<div class="boxes">
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="img/user.png" />
                        </div>
                        <div class="info-type">
                            <input name="name" type="text" id="ctl00_ContentPlaceHolder1_txtname" placeholder="Full Name" />
                            <span  style="color:Red;display:none;">Name Required</span>
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="img/mail.png" />
                        </div>
                        <div class="info-type">
                            <input name="email" type="text" id="ctl00_ContentPlaceHolder1_txtmail" placeholder="Email Id" />
                            <span id="ctl00_ContentPlaceHolder1_req2" style="color:Red;display:none;">Email ID Required</span>
                            <span id="ctl00_ContentPlaceHolder1_reg1" style="color:Red;display:none;">Check Mail Format</span>
                        </div>
                    </div>
                     <div class="info-one">
                        <div class="info-icon">
                            <img src="img/pass.png">
                        </div>
                        <div class="info-type">
                            <input name="password" type="password" id="ctl00_ContentPlaceHolder1_txtpswd" placeholder="Password" />
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;">Password Required</span>
                        </div>
                    </div>
                    <div class="info-one">
                        <div class="info-icon">
                            <img src="img/pass.png">
                        </div>
                        <div class="info-type">
                            <input name="number" type="text" placeholder="Mobile Number" />
                            <span id="ctl00_ContentPlaceHolder1_RequiredFieldValidator1" style="color:Red;display:none;">Mobile Required</span>
                        </div>
                    </div>
                    <div class="info-one">
                    	<div class="info-icon">
                        	<img src="img/dolar.png" />
                        </div>
                        <div class="info-type">
                            <input name="bitcon" type="text" id="ctl00_ContentPlaceHolder1_txtwallet" placeholder="BitCoin Wallet" />
                            <span id="ctl00_ContentPlaceHolder1_req3" style="color:Red;display:none;">Wallet Address Required</span>
                        </div>
                    </div>
                   

                    <div class="sign-in">
                        <input type="submit" name="regg" value="Register" onclick="javascript:WebForm_DoPostBackWithOptions(new WebForm_PostBackOptions(&quot;ctl00$ContentPlaceHolder1$btnregister&quot;, &quot;&quot;, true, &quot;a&quot;, &quot;&quot;, false, false))" id="ctl00_ContentPlaceHolder1_btnregister" />
                    </div>
                </div>
                </form>
            </div>
        </div>
</div>
</div>
</section>

    </div>
    
<script type="text/javascript">
//<![CDATA[
var Page_Validators =  new Array(document.getElementById("ctl00_ContentPlaceHolder1_req1"), document.getElementById("ctl00_ContentPlaceHolder1_req2"), document.getElementById("ctl00_ContentPlaceHolder1_reg1"), document.getElementById("ctl00_ContentPlaceHolder1_req3"), document.getElementById("ctl00_ContentPlaceHolder1_RequiredFieldValidator1"));
//]]>
</script>

<script type="text/javascript">
//<![CDATA[
var ctl00_ContentPlaceHolder1_req1 = document.all ? document.all["ctl00_ContentPlaceHolder1_req1"] : document.getElementById("ctl00_ContentPlaceHolder1_req1");
ctl00_ContentPlaceHolder1_req1.controltovalidate = "ctl00_ContentPlaceHolder1_txtname";
ctl00_ContentPlaceHolder1_req1.errormessage = "Name Required";
ctl00_ContentPlaceHolder1_req1.display = "Dynamic";
ctl00_ContentPlaceHolder1_req1.validationGroup = "a";
ctl00_ContentPlaceHolder1_req1.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_req1.initialvalue = "";
var ctl00_ContentPlaceHolder1_req2 = document.all ? document.all["ctl00_ContentPlaceHolder1_req2"] : document.getElementById("ctl00_ContentPlaceHolder1_req2");
ctl00_ContentPlaceHolder1_req2.controltovalidate = "ctl00_ContentPlaceHolder1_txtmail";
ctl00_ContentPlaceHolder1_req2.errormessage = "Email ID Required";
ctl00_ContentPlaceHolder1_req2.display = "Dynamic";
ctl00_ContentPlaceHolder1_req2.validationGroup = "a";
ctl00_ContentPlaceHolder1_req2.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_req2.initialvalue = "";
var ctl00_ContentPlaceHolder1_reg1 = document.all ? document.all["ctl00_ContentPlaceHolder1_reg1"] : document.getElementById("ctl00_ContentPlaceHolder1_reg1");
ctl00_ContentPlaceHolder1_reg1.controltovalidate = "ctl00_ContentPlaceHolder1_txtmail";
ctl00_ContentPlaceHolder1_reg1.errormessage = "Check Mail Format";
ctl00_ContentPlaceHolder1_reg1.display = "Dynamic";
ctl00_ContentPlaceHolder1_reg1.validationGroup = "a";
ctl00_ContentPlaceHolder1_reg1.evaluationfunction = "RegularExpressionValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_reg1.validationexpression = "\\w+([-+.\']\\w+)*@\\w+([-.]\\w+)*\\.\\w+([-.]\\w+)*";
var ctl00_ContentPlaceHolder1_req3 = document.all ? document.all["ctl00_ContentPlaceHolder1_req3"] : document.getElementById("ctl00_ContentPlaceHolder1_req3");
ctl00_ContentPlaceHolder1_req3.controltovalidate = "ctl00_ContentPlaceHolder1_txtwallet";
ctl00_ContentPlaceHolder1_req3.errormessage = "Wallet Address Required";
ctl00_ContentPlaceHolder1_req3.display = "Dynamic";
ctl00_ContentPlaceHolder1_req3.validationGroup = "a";
ctl00_ContentPlaceHolder1_req3.evaluationfunction = "RequiredFieldValidatorEvaluateIsValid";
ctl00_ContentPlaceHolder1_req3.initialvalue = "";
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
