<?php 
session_start();
$uuu = $_SESSION['ad_id'];
include('webconfig.php');
$result = mysql_query("SELECT * FROM tbl_user where ad_id='$uuu'");
while($row = mysql_fetch_array($result))
{
$ad_id = $row['ad_id']; 
$user_name = $row['user_name'];
$email_id = $row['email_id'];
$mobile_no = $row['mobile_no'];
$bitcan_wellet = $row['bitcan_wellet'];
$register_date = $row['register_date'];
$status = $row['status'];
}

$result = mysql_query("SELECT * FROM purchase_plan where user_fk_id='$uuu'");
while($row = mysql_fetch_array($result))
{



$AmountUSD = $row['AmountUSD'];
$UBTCAccountName = $row['UBTCAccountName'];
$UBTCAccountAdd = $row['UBTCAccountAdd'];
$AdminBTCAccount = $row['AdminBTCAccount'];
$AdminBTCAccountAdd = $row['AdminBTCAccountAdd'];
$buy_date = $row['buy_date'];

}
?> 


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head><meta charset="utf-8" /><link rel="apple-touch-icon" sizes="76x76" href="img/apple-icon.png" /><link rel="icon" type="image/png" href="img/favicon.png" /><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><title>
	COINSWAYS
</title><meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport" /><meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="css/bootstrap.min.css" rel="stylesheet" /><link href="css/material-dashboard.css" rel="stylesheet" /><link href="css/demo.css" rel="stylesheet" /><link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet" /><link href="http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons" rel="stylesheet" type="text/css" />
    	<script src="js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="js/bootstrap.min.js" type="text/javascript"></script>
	<script src="js/material.min.js" type="text/javascript"></script>
	<script src="js/chartist.min.js"></script>
	<script src="js/bootstrap-notify.js"></script>
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>
	<script src="js/material-dashboard.js"></script>
	<script src="js/demo.js"></script>
</head>
<body>
   
    <div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="img/sidebar-1.jpg">
			<!--
		        Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

		        Tip 2: you can also add an image using data-image tag
		    -->

			<div class="logo">
				<a href="#" class="simple-text">
                    <img src="../img/logo_bg.png" class="img-responsive"/>
				</a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="Dashboard.aspx">
	                        <i>Dashboard</i>
	                        <p>&nbsp;</p>
	                    </a>
	                </li>

	                 <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Affiliate <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                            <li><a href="Direct-Referal.aspx">Direct Referral</a></li>
                            <li><a href="MyTeam.aspx">Affiliate Team</a></li>
                        </ul>
                    </li>

                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Income  <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                            <li><a href="Referal-comission.aspx">Referal Income</a></li>
                             <li><a href="Income-Daily-Growth.aspx">Growth Income</a></li>
                            <li><a href="Daily-Growth.aspx">Daily Growth</a></li>
                        </ul>
                    </li>
	                
	                 <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Withdrawals <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                            <li><a href="Withdrawal-new.aspx">New Withdrawal</a></li>
                            
                        </ul>
                    </li>

                     <li class="dropdown">
                       <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Payments <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                            <li><a href="Upload_payment_slip.aspx">Purchase Plan</a></li>
                            
                        </ul>
                    </li>

                      <li class="dropdown">
                          <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Help Desk <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                       <li><a href="Helpdesk.aspx">Help Desk</a></li>
                            </ul>
                    </li>

                     <li class="dropdown">
                         <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">Profile <span class="caret"></span></a>
                        <ul class="dropdown-menu drop-menu">
                       <li><a href="profile.aspx">User Profile</a></li>
                            </ul>
                    </li>
	             
	               
					
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li class="dropdown">
								<a href="#" class="dropdown-toggle fhgvswe" data-toggle="dropdown">
							    <img src="img/mini-profile.png" class="mini-profi" /> 
                                    <span id="ctl00_lblmail">Santoshmmm420@gmail.com</span><span class="caret"></span>
								</a>
								<ul class="dropdown-menu">
									<li><a href="Dashboard.php"><i class="fa fa-bar-chart-o"></i> Dashboard</a></li>
									<li><a href="BitcoinAddress.php"><i class="fa  fa-bitcoin"></i> Bitcoin Address</a></li>
									<li><a href="Profile.php"><i class="fa fa-user"></i> Profile</a></li>
									<li><a href="Password.php"><i class="fa fa-lock"></i> Update Password</a></li>
									<li><a href="../index.php"><i class="fa fa-sign-out"></i> Logout</a></li>
								</ul>
							</li>
							<li>
								<a href="../index.php" class="ftuif">Logout</a>
							</li>
						</ul>

					</div>
				</div>
			</nav>

			
        
    <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">BitCoin Address</h4>
	                            </div>
	                            <div class="card-content">
	                                <div>
	                                    <div class="row">
                                         <div class="col-md-6">
                                                <label>Get Address</label>
												<div class="form-group label-floating">
													<label class="control-label fgtybnmi">Get Address</label>
	 <input name="btcadd" type="text" value="<?php echo $bitcan_wellet;?>" id="ctl00_ContentPlaceHolder1_txtwallet" class="form-control fgtybnmi" />
												</div>
	                                        </div>
	                                    </div>


	                                    <input type="submit" name="ctl00$ContentPlaceHolder1$btnupdate" value="Save Address" id="ctl00_ContentPlaceHolder1_btnupdate" class="btn btn-primary paper-shadow relative" />
	                                    <div class="clearfix"></div>
	                                </div>
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>

			
	</div>
    
    </form>
</body>
    <!--   Core JS Files   -->


	<script type="text/javascript">
	    $(document).ready(function () {

	        // Javascript method's body can be found in assets/js/demos.js
	        demo.initDashboardPageCharts();

	    });
	</script>
</html>
