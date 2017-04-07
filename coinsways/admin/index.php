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
<head>
<title>
	Btciqt
</title>
<?php include 'head.php'; ?>
</head>
<body>
   
   <div class="wrapper">

	   <?php include 'sidebar.php'; ?>
	    <div class="main-panel">
			
			  <?php include 'header.php'; ?>
        
    <div class="content">
				<div class="container-fluid">
					<div class="row">
                    <div class="col-md-12">
                        <div class="dashborad-top">
                             <div class="fgtuop">
                                <p> WELCOME, COINSWAYS</p>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <div class="regsitr">
<h5>Registration Date:<span id="ctl00_ContentPlaceHolder1_lblregdate"><?php echo $register_date;?></span></h5>
                                </div>
                            </div>

                            <div class="col-lg-6 col-md-12">
                                <div class="regsitr">
  <h5>Current Date:<span id="ctl00_ContentPlaceHolder1_lblregdt"><?php echo $register_date;?></span></h5>
                                </div>
                            </div>



                             <div class="col-lg-6 col-md-12 ftyufgn">
                             <div class="trouble-boxing">
                              <div class="col-md-4">
                              <div class="img-trouble">
                                  <img src="img/bitcoin-atm.png" class="img-responsive">
                                  </div>
                              </div>

                               <div class="col-md-8">
                                      <div class="text-trouble">
 <h2><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lblbalance"><?php echo $AmountUSD;?></span></h2>
                                       <h4>ACCOUNT BALANCE</h4>
                                    </div>
                              </div>
                              </div>
                            </div>

                            <div class="col-lg-6 col-md-12 ftyufgn">
                             <div class="trouble-boxing">
                                <div class="col-md-4">
                                <div class="img-trouble">
                                  <img src="img/bitcoin-atm.png" class="img-responsive">
                                </div></div>

                                 <div class="col-md-8">
                                    
                                    <div class="text-trouble">
    <h2><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lblearning"><?php echo $AmountUSD;?></span></h2>
                                    <h4>TOTAL EARNING</h4>
                                    </div>
                              </div>  
                              </div>
                            </div>

                          
                            
                                <div class="col-lg-3 col-md-3 withboxig">
                                    <div class="four-boxe">
                                        <h6>
                                            <a href="Upload_payment_slip.php">NEW DEPOSIT</a>
                                        </h6>
                                    </div>
                                </div>

                                 <div class="col-lg-3 col-md-3 withboxig">
                                    <div class="four-boxe">
                                    <h6>
                                        <a href="withdrawal-new.php">WITHDRAW</a>
                                    </h6>
                                    </div>
                                </div>

                                 <div class="col-lg-3 col-md-3 withboxig">
                                    <div class="four-boxe">
                                    <h6>
                                        <a href="Profile.php">EDIT ACCOUNT</a>
                                    </h6>
                                    </div>
                                </div>

                                 <div class="col-lg-3 col-md-3 withboxig">
                                    <div class="four-boxe">
                                     <h6>
                                         <a href="Direct-Referal.php">REFERRALS</a>
                                     </h6>
                                     </div>
                                </div>
                      

                      
                      <div class="col-md-6">
                        <div class="table-boxing">
                            <table>
                               
                                 <tr>
                                    <th>Active Deposit:</th>
                                    <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lblactdeposit"><?php echo $AmountUSD;?></span></td>
                                 </tr>
                                  <tr>
                                     <th>Last Deposit:</th>
                                     <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lbllastdeposit"><?php echo $AmountUSD;?></span></td>
                                  </tr>

                                   <tr>
                                     <th>Total Deposit:</th>
                                     <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lbltotaldeposit"><?php echo $AmountUSD;?></span></td>
                                  </tr>
                                
                                  </table>
                        </div>
                      </div>

                       <div class="col-md-6">
                        <div class="table-boxing">
                            <table>
                               
                                 <tr>
                                    <th>Pending Withdraws:</th>
                 <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lblpw"><?php echo $AmountUSD;?></span></td>
                                 </tr>
                                  <tr>
                                     <th>Last Withdrawal:</th>
              <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lbllw"><?php echo $AmountUSD;?></span></td>
                                  </tr>
                                   <tr>
                                     <th>Total Withdraw:</th>
                                     <td><i class="fa fa-btc"></i> <span id="ctl00_ContentPlaceHolder1_lbltw"><?php echo $AmountUSD;?></span></td>
                                  </tr>
                                
                                  </table>
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
