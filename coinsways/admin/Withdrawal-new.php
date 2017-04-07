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
<title>withdrawal-new::COINSWAYS</title>
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
<h4 class="title">Withdrawals</h4>
</div>

<div class="col-md-12 col-lg-12 ">
<h4 class="page-section-heading">Total Withdrawable Amount </h4>
<div class="panel panel-default panel-body">
<div class="col-md-6">
<label>Direct Income -</label>
<span id="ctl00_ContentPlaceHolder1_lblreferal"><?php echo $AmountUSD;?></span>
</div>
<div class="col-md-6 withdrawal-coln">
<label>Growth Income -</label>
<span id="ctl00_ContentPlaceHolder1_lblgrowth"><?php echo $AmountUSD;?></span>
</div> 
<div class="col-md-6 withdrawal-coln">
<label>Withdrawals Till Date -</label>
<span id="ctl00_ContentPlaceHolder1_lblwithdraw"><?php echo $AmountUSD;?></span>
</div>
<div class="col-md-6 withdrawal-coln">
<label>Account Balance -</label>
<span id="ctl00_ContentPlaceHolder1_lblnetamount"><?php echo $AmountUSD;?></span>
</div>
<div class="clearfix"></div>
<div class="col-md-4 withdrawal-coln">
<label>Amount to Withdraw (Numbers Only)</label>
<input name="ctl00$ContentPlaceHolder1$txtamount" type="text" id="ctl00_ContentPlaceHolder1_txtamount" class="form-control" />
</div>
<div class="col-md-3 withdrawal-coln">
<input type="submit" name="ctl00$ContentPlaceHolder1$btnwithdraw" value="Place Withdrawal" id="ctl00_ContentPlaceHolder1_btnwithdraw" class="btn btn-primary" style="margin-top: 25px !important;" />
</div>
</div>
</div>


<div class="card-content table-responsive">
<div class="col-md-12">
<div class="col-md-2">
<div class="form-group">
<select name="ctl00$ContentPlaceHolder1$ddlstatus" onchange="javascript:setTimeout(&#39;__doPostBack(\&#39;ctl00$ContentPlaceHolder1$ddlstatus\&#39;,\&#39;\&#39;)&#39;, 0)" id="ctl00_ContentPlaceHolder1_ddlstatus" class="form-control">
<option selected="selected" value="Pending">Pending</option>
<option value="Approved">Approved</option>
<option value="Rejected">Rejected</option>

</select>
</div>
</div>
</div>
<table class="table">
<thead class="text-primary">
<tr>
<th>Sl_no</th>
<th>Amount</th>
<th>Date</th>
<th>Status</th>
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
