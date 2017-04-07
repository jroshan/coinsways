<?php
date_default_timezone_set('Asia/Kolkata');
 $dd = date('y-m-d');
?>
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
<title>
Helpdesk::COINSWAYS
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
<h4 class="title">Help Desk</h4>
</div>

<div class="table-centrt">
<h2>Help Desk</h2>
</div>

<div class="col-md-12 col-lg-12 ">
<form method="post">
<div class="panel panel-default">
<div class="panel-body text-center ">
<div class="col-md-12">
<div class="col-md-12">
<div class="col-md-4 fgrtybn"><label>Select any Query</label></div>
<div class="col-md-8 gftybhnl">
<select name="ddltype" id="ctl00_ContentPlaceHolder1_ddltype" class="form-control" required>
<option value="">Select Your Query</option>
<option value="ACCOUNTS">ACCOUNTS</option>
<option value="GENERAL">GENERAL</option>
<option value="COMPLAIN">COMPLAIN</option>
<option value="TECHNICAL">TECHNICAL</option>
<option value="PLAN WITHDRAW">PLAN WITHDRAW</option>
</select>
</div>
</div>
<div class="col-md-12 fgythlkop">
<div class="col-md-4 fgrtybn"><label>Query</label></div>
<div class="col-md-8 gftybhnl">
<textarea name="txtquery" rows="5" cols="20" id="ctl00_ContentPlaceHolder1_txtquery" class="form-control">
</textarea>
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
</div>
</form>
</div>
<?php
include('webconfig.php');
if(isset($_POST['btnupload'])) {
$ddltype = $_POST['ddltype'];
$txtquery = $_POST['txtquery'];
$doc = $_POST['doc'];


$docins = "INSERT INTO tbl_helpdesk(hd_id,ddltype,txtquery,doc,reg_dt,userfk_id) 
VALUES (NULL, '$ddltype', '$txtquery', '$doc', '$dd','$ad_id')";

$msg = mysql_query($docins);
if($msg){
?>
<script>
alert('Submited Informaation Successfully');
window.location.href='Helpdesk.php';
</script>
<?php

}
}
?>

<div class="card-content table-responsive">
<table class="table">
<thead class="text-primary">
<th>Query Type</th>
<th>Query</th>
<th>Image</th>
<th>Date</th>
<th>Action</th>

</thead>
<tbody>
<?php
$result = mysql_query("SELECT * FROM tbl_helpdesk");
while($row = mysql_fetch_array($result))
{
echo '<tr class="record">';
echo '<td>'.$row['ddltype'].'</td>';
echo '<td>'.$row['txtquery'].'</td>';
echo '<td>'.$row['doc'].'</td>';
echo '<td>'.$row['reg_dt'].'</td>';
echo '<td><div><a href="query_delete.php?posid='.$row['hd_id'].'"><b class="pand">Delete</b></a></div></td>';
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
