
<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<title>
My Team::Coinsways
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
<h4 class="title">Affiliate Team</h4>
</div>

<div class="table-centrt">
<h2>Referral Link</h2>
<?php
$gg = $_SESSION['ad_id'];
$result = mysql_query("SELECT * FROM tbl_user where ad_id='$gg'");
while($row = mysql_fetch_array($result))
{
echo '<p><a id="ctl00_ContentPlaceHolder1_hypreferal" href="../registrationn.php?Ref='.$row['user_ram_no'].'" target="_blank" style="color:#5881B0;font-size:15px;font-weight:bold;">http://localhost/bitcoin/registration.php?ref='.$row['user_ram_no'].'</a>
</p>';
}
?>

</div>
<div class="card-content table-responsive">
<table class="table">
<thead class="text-primary">
<th></th>
<th>Name  </th>
<th>Referral  </th>
<th>Reg Date</th>
<th>Deposit</th>
<th>Level</th>
</thead>
<tbody>
<?php
include('webconfig.php');
$result = mysql_query("SELECT * FROM direct_referral where us_idfk='$gg'");
while($row = mysql_fetch_array($result))
{
	
echo '<tr class="record">';
echo '<th></th>';
echo '<td>'.$row['Name'].'</td>';
echo '<td>'.$row['Referral'].'</td>';
echo '<td>'.$row['Reg_Date'].'</td>';
echo '<td>'.$row['Deposit'].'</td>';
echo '<td>'.$row['status'].'</td>';
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
