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
Referral::COINSWAYS
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
	                        <div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Referral Comission Report</h4>
	                            </div>

                                <div class="table-centrt">
                                <h2>Total Income</h2>
                                <p>
                                    <span id="ctl00_ContentPlaceHolder1_lbltotal" style="color:#5881B0;font-size:15px;font-weight:bold;">0 USD</span>
                                </p>
                                </div>
	                            <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
                                            <tr>
                                                <th></th>
                                                <th>Amount(USD)</th>
                                                <th>Admin Charges(USD)</th>
                                                <th>Date</th>
                                                <th>From User</th>
                                            </tr>
	                                    </thead>
	                                    <tbody>
<?php
$count =0;
$result = mysql_query("SELECT * FROM purchase_plan where user_fk_id='$uuu'");
while($row = mysql_fetch_array($result))
{
$count +=1;
echo '<tr class="record">';
echo '<td> '.$count.'</td>';
echo '<td>'.$row['AmountUSD'].'</td>';
echo '<td>'.$row['buy_date'].'</td>';
echo '<td><div><a href="#?posid='.$row['pp_id'].'"><b class="pand">Pending</b></a></div></td>';
echo '</tr>';
}
?> 
</tbody> 
	                                </table>

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
