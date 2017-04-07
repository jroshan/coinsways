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
?>


<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title> Up-payment-slip::COINSWAYS </title>
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
<h4 class="title">Purchase Plan</h4>
</div>

<div class="table-centrt">
<h2>Purchase Plan</h2>
</div>

<div class="col-md-12 col-lg-12 ">
<div class="panel panel-default">
<form method="POST">
<div class="panel-body text-center ">
<div class="col-md-12">
<div class="col-md-12">
<div class="col-md-4 fgrtybn"><label>Amount USD(Number Only)</label></div>
<div class="col-md-8 gftybhnl">
<input name="amountusd" type="text" id="ctl00_ContentPlaceHolder1_txtamount" class="form-control" />
</div></div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>User's BTC Account Name</label></div>
<div class="col-md-8 gftybhnl">
<input name="ubtcacnm" type="text" value="<?php echo $bitcan_wellet;?>" id="ctl00_ContentPlaceHolder1_txtuacname" class="form-control" /> </div>
</div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>User's BTC Account Address</label></div>
<div class="col-md-8 gftybhnl">
<input name="ubtcaccadd" type="text" value="<?php echo $bitcan_wellet;?>" id="ctl00_ContentPlaceHolder1_txtuacaddress" class="form-control" />
</div>
</div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>Admin's BTC Account Name</label></div>
<div class="col-md-8 gftybhnl">
<input name="admbtcacct" type="text" value="Btciqt" id="ctl00_ContentPlaceHolder1_txtadminname" class="form-control" />
</div>
</div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>Admin's BTC Account Address</label></div>
<div class="col-md-8 gftybhnl">
<input name="abtcacadd" type="text" value="54add9f9-576b-4d11-9df0-c0a3e6601031" id="ctl00_ContentPlaceHolder1_txtadminaddress" class="form-control" />
</div>
</div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>Upload Snap</label></div>
<div class="col-md-8 gftybhnl">
<input type="file" name="doc" id="ctl00_ContentPlaceHolder1_fu01" class="inputfile inputfile-1 gyuihnmj" />


</div>
</div>
<div class="col-md-12 text-center" style="margin-top:15px;">
<input type="submit" name="btnupload" value="Submit" id="ctl00_ContentPlaceHolder1_btnupload" class="btn btn-primary" />
</div>
</div>
</div>
</form>
</div>
<?php
date_default_timezone_set('Asia/Kolkata');
 $dd = date('y-m-d');
?>
<?php 
session_start();
$uuu = $_SESSION['ad_id'];
include('webconfig.php');
if(isset($_POST['btnupload'])) 
{
$amountusd = $_POST['amountusd'];
$ubtcacnm = $_POST['ubtcacnm'];
$ubtcaccadd = $_POST['ubtcaccadd'];
$admbtcacct = $_POST['admbtcacct'];
$abtcacadd = $_POST['abtcacadd'];
$doc = $_POST['doc'];


$docins = "INSERT INTO purchase_plan(pp_id,AmountUSD,UBTCAccountName,UBTCAccountAdd,AdminBTCAccount,AdminBTCAccountAdd,UploadSnap,buy_date,user_fk_id) 
VALUES (NULL, '$amountusd', '$ubtcacnm', '$ubtcaccadd', '$admbtcacct', '$abtcacadd', '$doc', '$dd', '$uuu');";

$msg = mysql_query($docins);
if($msg){
?>
<script>
alert('Submited Informaation Successfully');
window.location.href='Upload_payment_slip.php';
</script>
<?php

}
}
?>
<div class="card-content table-responsive">
<table class="table">
<thead class="text-primary">
<th>SL_NO</th>
<th>Amount(BV)</th>
<th>User Name</th>
<th>User BTC</th>
<th>Admin Name</th>
<th>Admin BTC</th>
<th>Date</th>
<th>Action</th>
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
echo '<td>'.$row['UBTCAccountName'].'</td>';
echo '<td>'.$row['UBTCAccountAdd'].'</td>';
echo '<td>'.$row['AdminBTCAccount'].'</td>';
echo '<td>'.$row['AdminBTCAccountAdd'].'</td>';
echo '<td>'.$row['buy_date'].'</td>';
echo '<td><div><a href="payment_del.php?posid='.$row['pp_id'].'"><b class="pand">Delete</b></a></div></td>';
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
