<?php
include('webconfig.php');
if(isset($_GET['posid']))
{
	$z=$_GET['posid'];
	$query ="delete from purchase_plan where pp_id=$z";
	
	if(mysql_query($query) or die(mysql_error()))
	{
     ?>
    <script>
       alert('Successfully Delete Information');
        window.location.href='Upload_payment_slip.php';
        </script>
    <?php
	}
	
	else
	{
		echo '<h4 class="alert error">Error In Deleting user</h4>';
	}
}
?>